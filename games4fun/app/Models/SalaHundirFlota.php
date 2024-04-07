<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaHundirFlota extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'salas_hundir_flota';
    protected $primaryKey = 'id_sala';

    protected $fillable = [
        'id_sala',
        'jugador_1',
        'jugador_2',
        'objetivo',
    ];
}
