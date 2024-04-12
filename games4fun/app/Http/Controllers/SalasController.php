<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaHundirFlota;
use App\Models\SalaDamas;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class SalasController extends Controller
{

    public function crearSala() {
        $DAMAS = 'damas';
        $HUNDIR_FLOTA = 'hf';
        $TRES_RAYA = 'tr';
        $QUIEN_QUIEN = 'qnq';

        switch ($_GET['sala']) {
            case $DAMAS:
                $sala = SalaDamas::create([
                    'jugador_1' => "" . $_GET['usr'],
                ]);

                return json_encode($sala);
                break;

            case $HUNDIR_FLOTA:
                $sala = SalaHundirFlota::create([
                    'jugador_1' => "" . $_GET['usr'],
                ]);

                return view('hundir-flota', compact($sala));
                break;
            
            case $TRES_RAYA:
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

    public function datosSala() {
        $DAMAS = 'damas';
        $HUNDIR_FLOTA = 'hf';
        $TRES_RAYA = 'tr';
        $QUIEN_QUIEN = 'qnq';

        $tipoSala = $_GET['sala'];
        $idSala = $_GET['idSala'];

        switch ($tipoSala) {
            case $DAMAS:
                $sala = SalaDamas::where('id_sala', $idSala)->get();
                return json_encode($sala);
                break;

            case $HUNDIR_FLOTA:
                $sala = SalaHundirFlota::create([
                    'jugador_1' => "" . $_GET['usr'],
                ]);

                return view('hundir-flota', compact($sala));
                break;
            
            case $TRES_RAYA:
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
