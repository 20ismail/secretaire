<?php

// app/Models/Secretaire.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Secretaire extends Authenticatable implements AuthenticatableContract

{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Departement::class, 'departement', 'intitule');
    }
}
