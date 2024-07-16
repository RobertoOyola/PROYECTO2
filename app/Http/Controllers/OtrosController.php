<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OtrosController extends Controller
{
    public function getHistorialVisita($cedula)
    {
        $historial = DB::select('CALL SP_GET_HISTORIAL_VISITA(?)', array($cedula));

        return response()->json(['Historial' => $historial], 200);
    }
}