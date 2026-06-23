<?php

namespace App\Http\Controllers;

use App\Models\Emargement;
use Illuminate\Http\Request;

class EmargementController extends Controller
{
    // Afficher le formulaire de signature
    public function create()
    {
        return view('emargement.create');
    }

    // Enregistrer la signature
    public function store(Request $request)
    {
        $request->validate([
            'signature' => 'required|string',
        ]);

        Emargement::create([
            'signature' => $request->signature,
            'date'      => now()->toDateString(),
            'heure'     => now()->toTimeString(),
        ]);

        return redirect()->route('emargement.index');
    }

    // Afficher la liste des émargements
    public function index()
    {
        $emargements = Emargement::all();
        return view('emargement.index', compact('emargements'));
    }
}
