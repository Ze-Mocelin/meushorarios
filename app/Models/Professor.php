<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'professores';

    protected $fillable = [
    'nome',
    'disciplina',
    'horas',
    'matutino',
    'vespertino',
    'noturno',
    'mseg11',
    'mseg12',
    'mseg13',
    'mseg14',
    'mseg15',
    'mseg16',

    'mter11',
    'mter12',
    'mter13',
    'mter14',
    'mter15',
    'mter16',

    'mqua11',
    'mqua12',
    'mqua13',
    'mqua14',
    'mqua15',
    'mqua16',

    'mqui11',
    'mqui12',
    'mqui13',
    'mqui14',
    'mqui15',
    'mqui16',

    'msex11',
    'msex12',
    'msex13',
    'msex14',
    'msex15',
    'msex16',

    'msab11',
    'msab12',
    'msab13',
    'msab14',
    'msab15',
    'msab16',

    'mdom11',
    'mdom12',
    'mdom13',
    'mdom14',
    'mdom15',
    'mdom16',
    'id_user',
    ];

}
