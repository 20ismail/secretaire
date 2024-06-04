<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
use App\Models\Semestre;
use App\Models\composent;
use Illuminate\Http\Request;
use DB;
class ComposentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semestre=Semestre::all();
        $fil2=Filiere::all();
        $results = DB::table('composents')
        ->join('semestres', 'composents.idsemestre', '=', 'semestres.id')
        ->join('filieres', 'composents.idfiliere', '=', 'filieres.id')
        ->select('*','composents.id as composent_id')
        ->get();
        // dd($results);
        return view('Secretaire.groupe',compact('semestre','fil2','results'));
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
        $data = $request->validate([
            'intitule' => 'string|max:255',
            'nbr_groupes' => 'integer',
            'idfiliere' => 'nullable',
            'idsemestre' => 'nullable',
        ]);

        $semestre=Semestre::where('numeroSemestre',$request['numeroSemestre'])->first();
        $filiere = Filiere::where('intitule_filiere', $request['name'])
                  ->where('cycle', $request['cycle'])
                  ->first();
                  $data ['intitule']="Cours";
                  $data ['nbr_groupes']=$request['nbr_cours'];
                  $data ['idsemestre']=$semestre['id'];
                  $data ['idfiliere']=$filiere['id'];
                // dd($filiere['id']);
                  Composent::create( $data);
                  $data ['intitule']="TP";
                  $data ['nbr_groupes']=$request['nbr_tp'];
                  Composent::create( $data);
                  $data ['intitule']="TD";
                  $data ['nbr_groupes']=$request['nbr_td'];
                  Composent::create( $data);
        // dd($semestre,$filiere);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(composent $composent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(composent $composent)
    {
        // dd($composent);
        $results = DB::table('composents')
        ->join('semestres', 'composents.idsemestre', '=', 'semestres.id')
        ->join('filieres', 'composents.idfiliere', '=', 'filieres.id')
        ->select('*','composents.id as composent_id')->where('composents.id',$composent['id'])
        ->first();
        // dd( $results);
        $fil=Filiere::all();
        $semestre=Semestre::all();
        return view('Secretaire.editGroup',compact('results','fil','semestre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, composent $composent)
    {
         $request->validate([
            'intitule' => 'string|max:255',
            'nbr_groupes' => 'integer',
            'idfiliere' => 'nullable',
            'idsemestre' => 'nullable',
        ]);

        $semestre=Semestre::where('numeroSemestre',$request['numeroSemestre'])->first();
        $filiere = Filiere::where('intitule_filiere', $request['branche'])
                  ->where('cycle', $request['cycle'])
                  ->first();
                //   dd( $request['branche']);
                  if($request['type']=="Cours"){
                    $composent->intitule="Cours";
                    $composent->nbr_groupes=$request['Cours'];
                    $composent->idsemestre=$semestre['id'];
                    $composent->idfiliere=$filiere['id'];
                    $composent->save();
                  }
                 
                  if($request['type']=="TP"){
                    $composent->intitule="TP";
                    $composent->nbr_groupes=$request['TP'];
                    $composent->idsemestre=$semestre['id'];
                    $composent->idfiliere=$filiere['id'];
                    $composent->save();
                  }

                  if($request['type']=="TD"){
                    $composent->intitule="TD";
                    $composent->nbr_groupes=$request['TP'];
                    $composent->idsemestre=$semestre['id'];
                    $composent->idfiliere=$filiere['id'];
                    $composent->save();
                  }
                  return redirect()->route('composents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(composent $composent)
    {
        $composent->delete();
        return redirect()->back();
        
    }
}
