<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours = Cours::with(['user'])
        ->whereDate('date','>=',now()->toDateString())
        ->orderBy('date')
        ->orderBy('heure_debut')
        ->get();
        return response()->json($cours);
        //transformation en tableau Json
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $validated = $request->validate([
            'heure_debut' => ['required', 'date_format:H:i'],
            'heure_fin' => ['required', 'date_format:H:i'],
            'matiere' => ['required', 'string'],
            'date' =>['required','date_format:H:i'],
            ]);

            $cours = Cours::create($validated);

        return response()->json($cours,201);
        

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cours = Cours::find($id)->load(['user']);

        return response()->json($cours);
        //lire
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cours $cours)
    {
       $validated = $request->validate([
            'heure_debut' => ['required', 'date_format:H:i'],
            'heure_fin' => ['required', 'date_format:H:i'],
            'matiere' => ['required', 'string'],
            'date' => ['required', 'date_format:Y-m-d'],
            'user_id' => ['required','exists:users,id'],
        ]);

        $cours->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cours $cours)
    {
        $cours->delete();

        return response () ->json(['message' => 'Cours supprimé']);
      
        //
    }
}
