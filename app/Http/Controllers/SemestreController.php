
<?php

namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\Semestre;
    
    class SemestreController extends Controller
    {
        public function getSemestres()
        {
            $semestres = Semestre::select('numero_semestre')
                ->distinct()
                ->get();
    
            return view('your_view', ['semestres' => $semestres]);
        }
    }

