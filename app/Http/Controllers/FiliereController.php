<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Semestre;
use App\Models\Departement;
use Illuminate\Support\Facades\Auth;

class FiliereController extends Controller
{
    public function index()
    {
        // Get the logged-in secretaire
        $secretaire = Auth::user();

        // Fetch the departement_id based on the secretaire's departement
        $departement = Departement::where('intitule', $secretaire->departement)->first();

        // Check if the department exists
        if ($departement) {
            $departement_id = $departement->id;

            // Fetch the fillieres that belong to the same department as the secretaire
            $fillieres = Filiere::where('id', $departement_id)
                ->select('intitule_filiere')
                ->distinct()
                ->get();
        } else {
            $fillieres = collect(); // If no department is found, return an empty collection
        }

        // Fetch all the semestres
        $semestres = Semestre::select('numeroSemestre')
            ->distinct()
            ->get();

       // dd($fillieres, $semestres);

        return view('Secretaire.filiere', compact('fillieres', 'semestres'));
    }


    public function create()
    {
        // Logic for showing a form to create a new filiere
    }

    
    public function store(Request $request)
    {
        // Logic for storing a new filiere
    }

    
    public function show($id)
    {
        // Logic for displaying a specific filiere
    }

    
    public function edit($id)
    {
        // Logic for showing a form to edit a specific filiere
    }

    
    public function update(Request $request, $id)
    {
        // Logic for updating a specific filiere
    }

   
    public function destroy($id)
    {
        // Logic for deleting a specific filiere
    }
   
}

