<?php

namespace App\Http\Controllers;

use App\Models\Secretaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import DB facade from correct namespace

class SecretaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'numTelephone' => 'nullable|string|max:15',
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Update the user fields
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->numTelephone = $request->input('numTelephone');

        // Update the password if it is provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Handle the profile image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($user->image) {
                Storage::delete('public/' . $user->image);
            }

            // Store the new image
            $path = $request->file('image')->store('profile_images', 'public');
            $user->image = $path;
        }

        // Save the updated user
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
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
    public function show(Secretaire $secretaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretaire $secretaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretaire $secretaire)
    {
        //
    }
}
