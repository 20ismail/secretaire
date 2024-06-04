<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class composent extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'nbr_groupes',
        'idfiliere',
        'idsemestre',
    ];
}
