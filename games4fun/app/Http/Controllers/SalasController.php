<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaHundirFlota;

class SalasController extends Controller
{
    public function crearSala() {
        $SALA_HUNDIR_FLOTA = '1';
        $TRES_RAYA = '2';
        $DAMAS = '3';
        $QUIEN_QUIEN = '4';

        switch ($_REQUEST['sala']) {
            case $SALA_HUNDIR_FLOTA:
                SalaHundirFlota::create([
                    'jugador_1' => $_REQUEST['usr'],
                ]);
                break;

            case $TRES_RAYA:
                # code...
                break;

            case $DAMAS:
                # code...
                break;

            case $QUIEN_QUIEN:
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }
}
