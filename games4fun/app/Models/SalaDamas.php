<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaDamas extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'salas_damas';
    protected $primaryKey = 'id_sala';

    protected $fillable = [
        'id_sala',
        'jugador_1',
        'jugador_2',
        'movimiento',
    ];
}
