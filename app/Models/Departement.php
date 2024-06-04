<?php
// app/Models/Departement.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    public function professeurs()
    {
        return $this->hasMany(Professeur::class, 'id_departement');
    }

    public function secretaires()
    {
        return $this->hasMany(Secretaire::class, 'departement', 'intitule');
    }
}

