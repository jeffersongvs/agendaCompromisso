<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_do_compromisso',
        'data',
        'hora_inicio',
        'hora_termino',
        'local',
        'status',
        'observacoes',
    ];
}
