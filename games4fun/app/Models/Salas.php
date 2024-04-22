<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'salas';
    protected $primaryKey = 'id_sala';
    protected $keyType = 'string';

    protected $fillable = [
        'id_sala',
        'jugador_1',
        'jugador_2',
        'movimiento_j1',
        'movimiento_j2',
        'mensaje_j1',
        'mensaje_j2',
        'publica',
        
    ];
}
