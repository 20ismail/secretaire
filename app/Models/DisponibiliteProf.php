<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisponibiliteProf extends Model
{
    use HasFactory;

    protected $table = 'disponibilite_profs';

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'id_prof');
    }

    public function semestre()
    {
        return $this->belongsTo(Semestre::class, 'id_semestre');
    }
}
