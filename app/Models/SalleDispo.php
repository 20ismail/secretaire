<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SallesDispo extends Model
{
    use HasFactory;

    // Specify the table name if it's different from


    // Specify the table name if it's different from the class name in plural form
    protected $table = 'salle_dispos';

    // Specify the primary key if it's not the default 'id'
    protected $primaryKey = 'id';

    // Indicate if the primary key is an incrementing integer value
    public $incrementing = true;

    // The "type" of the auto-incrementing ID
    protected $keyType = 'int';

    // Indicates if the IDs are auto-incrementing
    public $timestamps = false;

    // Specify the fields that are mass assignable
    protected $fillable = [
        'disponibilite',
        'jour',
        'matin',
        'apres_midi',
        'idSecretaire'
    ];

    // Optionally, specify the fields that should be cast to native types
    protected $casts = [
        'disponibilite' => 'boolean',
        'matin' => 'boolean',
        'apres_midi' => 'boolean',
        'idSecretaire' => 'integer'
    ];

    // Define the relationship with the Secretaire model
    public function secretaire()
    {
        return $this->belongsTo(Secretaire::class, 'idSecretaire');
    }
}
