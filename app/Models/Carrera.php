<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'carreras'; // Ajusta el nombre de la tabla según sea necesario
    protected $fillable = ['NombreCarrera', 'idFacultad'];
    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'idFacultad');
    }
    
}
