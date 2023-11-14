<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = ['nombre', 'idFacultad', 'idCarrera'];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'idFacultad');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'idCarrera');
    }
}
