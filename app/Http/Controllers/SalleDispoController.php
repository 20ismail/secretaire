<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalleDispo;
use Illuminate\Support\Facades\Hash;


class SalleDispoController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());
        // Validate the request data
        $validatedData = $request->validate([
            'jeudi_matin_amphi' => 'required|string',
            'jeudi_apresmidi_amphi' => 'required|string',
            // Add other validations similarly
        ]);

        // Save the data to the database
        try {
            // Save the data to the database
            $salleDispo = new SalleDispo();
            $salleDispo->jour = 'Jeudi';
            $salleDispo->matin = $request->input('jeudi_matin_amphi') !== 'Non disponible';
            $salleDispo->apres_midi = $request->input('jeudi_apresmidi_amphi') !== 'Non disponible';
            $salleDispo->idSecretaire = 1; // Set the secretary ID appropriately
            $salleDispo->save();

    
        // Respond with JSON
        return redirect()->route('Salle')->with('success', 'Infos enregistrées avec succès');
    } catch (\Exception $e) {
        // Redirect back with input and error message
        return back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'enregistrement : ' . $e->getMessage()]);
    }
}
}

    
    