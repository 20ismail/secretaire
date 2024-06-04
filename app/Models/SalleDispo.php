<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalleDispo extends Model
{
    use HasFactory;

    

    // Specify the fields that are mass assignable
    protected $fillable = [
        'disponibilite',
        'jour',
        'matin',
        'apres_midi',
        'idSecretaire',
        'TypeSalle',
        'numero',
    ];

    // Optionally, specify the fields that should be cast to native types
  

    // Define the relationship with the Secretaire model
    public function secretaire()
    {
        return $this->belongsTo(Secretaire::class, 'idSecretaire');
    }
}
