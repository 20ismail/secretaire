<?php

// app/Models/Module.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['nomModule', 'idProf'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'idProf');
    }
}


