<?php
// app/Http/Controllers/GroupeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;

class GroupeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numeroGroupe' => 'required|integer',
            'nbrEtudiants' => 'required|integer',
            'type' => 'required|string',
            'idSemestre' => 'required|integer'
        ]);

        $groupe = Groupe::create($validatedData);

        return response()->json(['message' => 'Group added successfully'], 201);
    }
}


