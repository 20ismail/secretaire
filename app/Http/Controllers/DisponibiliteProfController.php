<?php

namespace App\Http\Controllers;

use App\Models\DisponibiliteProf;
use Illuminate\Http\Request;
use App\Models\Professeur; 
use Illuminate\Support\Facades; // Import DB facade from correct namespace
use App\Models\Semestre;
use App\Models\Secretaire;
use App\Models\Departement;

class DisponibiliteProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   

                // Display the page with the dropdown
                
    // Handle form submission to get professor availability based on selected semester
    public function index(Request $request)
    {
        $selectedSemestre = $request->input('select-semestre');
        $disponibilites = [];

        // Assuming you have the authenticated secretary
        $secretaire = auth()->user();
        $departmentIntitule = $secretaire->departement;

        // Retrieve the id_departement from the departement table
        $departement = Departement::where('intitule', $departmentIntitule)->first();
        $departmentId = $departement ? $departement->id : null;

        if ($selectedSemestre) {
            $semestre = Semestre::where('numeroSemestre', $selectedSemestre)->first();
            if ($semestre && $departmentId) {
                $disponibilites = DisponibiliteProf::where('id_semestre', $semestre->id)
                    ->whereHas('professeur', function($query) use ($departmentId) {
                        $query->where('id_departement', $departmentId);
                    })
                    ->with(['professeur', 'semestre'])
                    ->get();
            }
        }

        $semestres = Semestre::all();
        return view('Secretaire.DispoEnseignant', compact('semestres', 'selectedSemestre', 'disponibilites'));
    }

    

        
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DisponibiliteProf $disponibiliteProf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DisponibiliteProf $disponibiliteProf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DisponibiliteProf $disponibiliteProf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DisponibiliteProf $disponibiliteProf)
    {
        //
    }
}
