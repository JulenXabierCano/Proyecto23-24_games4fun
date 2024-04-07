<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaQuienQuien extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'salas_quien_es_quien';
    protected $primaryKey = 'id_sala';

    protected $fillable = [
        'id_sala',
        'jugador_1',
        'jugador_2',
        'mensaje_j1',
        'mensaje_j2',
    ];
}
