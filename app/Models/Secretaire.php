<?php

// app/Models/Secretaire.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Secretaire extends Authenticatable
{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Departement::class, 'departement', 'intitule');
    }
}
