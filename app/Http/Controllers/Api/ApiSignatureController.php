<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiSignatureController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'signature' => ['required', 'string'],
            'cours_id'  => ['required', 'integer'],
            'user_id'   => ['nullable', 'integer'],
        ]);

        $signature = Signature::create([
            'signature' => $validated['signature'],
            'date'      => now(),
            'user_id'   => $validated['user_id'] ?? Auth::id(),
            'cours_id'  => $validated['cours_id'],
        ]);

        return response()->json([
            'status' => 'ok',
            'signature_id' =>$signature->id,], 201);
    }
}
