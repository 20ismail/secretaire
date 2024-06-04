<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Professeur;
use App\Models\Secretaire;
use App\Models\Departement;

class ProfesseurController extends Controller
{
    public function index()
    {
        // Get the logged-in secretary
        $secretaire = Auth::user();

        // Get the department of the secretary
        $departement = Departement::where('intitule', $secretaire->departement)->first();

        // Get the professeurs belonging to that department
        $professeurs = Professeur::where('id_departement', $departement->id)->get();

        return view('Secretaire.InfoEnseignant', compact('professeurs'));
    }
}
