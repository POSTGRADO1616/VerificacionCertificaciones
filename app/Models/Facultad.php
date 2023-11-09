<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;
    
    protected $table = 'facultades'; // Ajusta el nombre de la tabla según sea necesario

    protected $fillable = [
        'NombreFacultad',
    ];

}
