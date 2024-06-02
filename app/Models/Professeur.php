<?php
// app/Models/Professeur.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;

    public function modules()
    {
        return $this->hasMany(Module::class, 'id_prof');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_department');
    }
}
