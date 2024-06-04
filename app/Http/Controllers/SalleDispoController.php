<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalleDispo;
use Illuminate\Support\Facades\Hash;
use App\Models\SalleEst;
use Auth;
class SalleDispoController extends Controller
{


    public function index()
    {
        // Logique pour afficher une liste des disponibilités des salles
        $salleDispo = SalleDispo::select('TypeSalle')->distinct()->get();
        
        // dd($salleDispo);
        $salleDisp=SalleDispo::paginate(15);
        $salles=salleEst::all();
        $Amphi=salleEst::where('TypeSalle',"Amphi")->get();
        $salleTp=salleEst::where('TypeSalle',"Salle TP")->get();
        $salleTd=salleEst::where('TypeSalle',"Salle TD")->get();
        $miniAmphi=salleEst::where('TypeSalle',"Mini-Amphi")->get();
        // dd($Amphi);
        return view('Secretaire.salledispo',compact('salles','Amphi','salleTp','salleTd','miniAmphi','salleDispo','salleDisp'));
    }

    public function create()
    {
        // Logique pour afficher un formulaire de création de disponibilité de salle
        
        $salles=salleEst::all();
        $Amphi=salleEst::where('TypeSalle',"Amphi")->get();
        $salleTp=salleEst::where('TypeSalle',"Salle TP")->get();
        $salleTd=salleEst::where('TypeSalle',"Salle TD")->get();
        $miniAmphi=salleEst::where('TypeSalle',"Mini-Amphi")->get();
        // dd($Amphi);
        return view('Secretaire.SalleDispoAdd',compact('salles','Amphi','salleTp','salleTd','miniAmphi'));
    }

    

    public function show($id)
    {
        // Logique pour afficher les détails d'une disponibilité de salle spécifique
    }

    public function edit($id)
    {
        // Logique pour afficher un formulaire d'édition d'une disponibilité de salle existante
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour une disponibilité de salle spécifique dans la base de données
    }

    public function destroy($id)
    {
        $salle=SalleDispo::find($id);
        $salle->delete();
        // Logique pour supprimer une disponibilité de salle spécifique de la base de données
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $amphi = $request->input('amphi');
        $mini = $request->input('mini');
        $salletd = $request->input('salletd');
        $salletp = $request->input('salletp');
        // dd($amphi, $mini,$salletd ,$salletp, $request['jours'],$request['time']);

        if($amphi!=NULL){
            foreach ($amphi as $key => $value) {
                $data = [
                    'jour' => $request['jours'],
                    'idSecretaire' => Auth::user()->id,
                    'numero' => $value,
                    'TypeSalle'=>"Amphi",
                ];
        
                // Définir 'apres_midi' en fonction de la condition
                if ($request['time'] == 'Après-midi') {
                    $data['apres_midi'] = 1;
                } else {
                    $data['apres_midi'] = 1;
                }
        
                SalleDispo::create($data);
                   
                
            }
        }
        if($mini!=NULL){
            foreach ($mini as $key => $value) {
                $data = [
                    'jour' => $request['jours'],
                    'idSecretaire' => Auth::user()->id,
                    'numero' => $value,
                    'TypeSalle'=>"Mini-Amphi",
                ];
        
                // Définir 'apres_midi' en fonction de la condition
                if ($request['time'] == 'Après-midi') {
                    $data['apres_midi'] = 1;
                } else {
                    $data['apres_midi'] = 1;
                }
        
                SalleDispo::create($data);
                   
                
            }
        }
        if($salletd!=NULL){
            foreach ($salletd as $key => $value) {
                $data = [
                    'jour' => $request['jours'],
                    'idSecretaire' => Auth::user()->id,
                    'numero' => $value,
                    'TypeSalle'=>"Salle TD",
                ];
        
                // Définir 'apres_midi' en fonction de la condition
                if ($request['time'] == 'Après-midi') {
                    $data['apres_midi'] = 1;
                } else {
                    $data['apres_midi'] = 1;
                }
        
                SalleDispo::create($data);
                   
                
            }
        }
        if($salletp !=NULL){
            foreach ($salletp  as $key => $value) {
                $data = [
                    'jour' => $request['jours'],
                    'idSecretaire' => Auth::user()->id,
                    'numero' => $value,
                    'TypeSalle'=>"Salle TP",
                ];
        
                // Définir 'apres_midi' en fonction de la condition
                if ($request['time'] == 'Après-midi') {
                    $data['apres_midi'] = 1;
                } else {
                    $data['apres_midi'] = 1;
                }
        
                SalleDispo::create($data);
                   
                
            }
            
        }
       
        
        return redirect()->back()->with('success','Les salles ont été ajoutées avec succès');
        // 'matin',
        // 'apres_midi',
        // 'idSecretaire'
        // Validate the request data
    //     $validatedData = $request->validate([
    //         'jeudi_matin_amphi' => 'required|string',
    //         'jeudi_apresmidi_amphi' => 'required|string',
    //         // Add other validations similarly
    //     ]);

    //     // Save the data to the database
    //     try {
    //         // Save the data to the database
    //         $salleDispo = new SalleDispo();
    //         $salleDispo->jour = 'Jeudi';
    //         $salleDispo->matin = $request->input('jeudi_matin_amphi') !== 'Non disponible';
    //         $salleDispo->apres_midi = $request->input('jeudi_apresmidi_amphi') !== 'Non disponible';
    //         $salleDispo->idSecretaire = 1; // Set the secretary ID appropriately
    //         $salleDispo->save();

    
    //     // Respond with JSON
    //     return redirect()->route('Salle')->with('success', 'Infos enregistrées avec succès');
    // } catch (\Exception $e) {
    //     // Redirect back with input and error message
    //     return back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'enregistrement : ' . $e->getMessage()]);
    // }
}
}

    
    