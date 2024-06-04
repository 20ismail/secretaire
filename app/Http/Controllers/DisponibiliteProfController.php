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
        // Fetch all semesters
        $semestres = Semestre::all();

        // Assuming you have the authenticated secretary
        $secretaire = auth()->user();
        $departementIntitule = $secretaire->departement;

        // Fetch the department based on the secretary's department
        $departement = Departement::where('intitule', $departementIntitule)->first();

        if ($departement) {
            // Fetch all availabilities for the department's professors
            $disponibilites = DisponibiliteProf::whereHas('professeur', function($query) use ($departement) {
                    $query->where('departement_id', $departement->id);
                })
                ->with(['professeur', 'semestre'])
                ->get();
        } else {
            $disponibilites = [];
        }

        return view('Secretaire.DispoEnseignant', compact('semestres', 'disponibilites'));
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
