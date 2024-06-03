<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Semestre;

class FiliereController extends Controller
{

    public function index()
    {
        $fillieres=filiere::all();
        $semestres=Semestre::all();
        return view('Secretaire.Filiere',compact('fillieres','semestres'));
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

