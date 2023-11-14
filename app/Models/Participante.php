<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $table = 'participantes';
    protected $fillable = ['ci','nombre','apellido_paterno','apellido_materno'];
}
