<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';

    protected $fillable = [
        'nomecurso',
        'matutino',
        'vespertino',
        'noturno',
        'seg',
        'ter',
        'qua',
        'qui',
        'sex',
        'sab',
        'dom',
        'id_user',

    ];
}
