<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        /** @var User $user */
        $user = Auth::user();

        $token = $user->createToken('external-app-token')->plainTextToken;

        return response()->json([
            'user' => [
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email,
            ],
            'token'      => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $token = Session::get('remote_auth_token');

        if ($token) {
            Http::baseUrl(config('services.api.url'))
                ->acceptJson()
                ->post("/api/auth/logout/{$token}");
        }

        Session::forget('remote_auth_token');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function me(Request $request)
    {
        return response()->json([
            'id'    => $request->user()->id,
            'name'  => $request->user()->name,
            'email' => $request->user()->email,
        ]);
    }
}