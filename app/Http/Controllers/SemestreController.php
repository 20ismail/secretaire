<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre;

class SemestreController extends Controller
{
    public function index()
    {
        $semestres = Semestre::select('numeroSemestre')
            ->distinct()
            ->get();

        return view('Secretaire.DispoEnseignant', compact('semestres'));
    }
}

