<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class AccueilController extends Controller
{
    public function getCours()
    {
        $cours = Cours::with(['user'])
            ->whereDate('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->orderBy('heure_debut')
            ->get();

            $toto='toto';

        return view('vue', [
            'cours' => $cours,
            'toto' => $toto,
            ]);
    }
}
