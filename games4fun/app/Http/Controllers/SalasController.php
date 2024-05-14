<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Sala;

class SalasController extends Controller
{

    public function crearSala(Request $request)
    {
        return json_encode(Sala::create([
            "jugador_1" => $request->usr,
            "privada" => $request->privada,
        ]));
    }

    public function datosSala(Request $request)
    {
        return Sala::where("id", $request->id)->first();
    }

    public function entrar(Request $request)
    {
        Sala::where('id', $request->id)
            ->update(['jugador_2' => $request->usr2]);
        return Sala::where("id", $request->id)->first();
    }

    public static function salasPublicas()
    {
        return json_encode(Sala::where('privada', 'false')->get());
    }

    public static function limpiar_salas()
    {
        $salas = Sala::all();
        foreach ($salas as $sala) {
            $sala->delete();
        };
    }
}
