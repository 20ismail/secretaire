<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;

class ProfesseurController extends Controller
{
    public function index()
    {
        $professeurs = Professeur::all();
        return view('Secretaire.InfoEnseignant', compact('professeurs'));
    }

    public function filter(Request  $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');

        $professeurs = Professeur::query()
            ->when($nom, function ($query, $nom) {
                return $query->where('nom', $nom);
            })
            ->when($prenom, function ($query, $prenom) {
                return $query->where('prenom', $prenom);
            })
            ->get();

        return response()->json($professeurs);
    }
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;

class ProfesseurController extends Controller
{
    public function index()
    {
        $professeurs = Professeur::all();
        return view('Secretaire.InfoEnseignant', compact('professeurs'));
    }

    public function filter(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');

        \Log::info("Filtering professeurs with nom: $nom, prenom: $prenom"); // Debug log

        $professeurs = Professeur::query()
            ->when($nom, function ($query, $nom) {
                return $query->where('nom', $nom);
            })
            ->when($prenom, function ($query, $prenom) {
                return $query->where('prenom', $prenom);
            })
            ->get();

        return view('professeurs.table', compact('professeurs'));
    }
}
*/
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
