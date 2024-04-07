<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaTresRaya extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'salas_tres_en_raya';
    protected $primaryKey = 'id_sala';

    protected $fillable = [
        'id_sala',
        'jugador_1',
        'jugador_2',
        'eleccion',
    ];
}
