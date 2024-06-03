<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre;

class SemestreController extends Controller
{
    public function getSemestres()
    {
        return Semestre::select('numero_semestre')
            ->distinct()
            ->get();
    }
}

