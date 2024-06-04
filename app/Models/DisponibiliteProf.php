<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisponibiliteProf extends Model
{
    protected $table = 'disponibilite_prof';

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'id_prof');
    }
}
