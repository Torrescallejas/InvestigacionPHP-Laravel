<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'fecha_nacimiento'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'inscripciones')->withTimestamps();
    }
}
