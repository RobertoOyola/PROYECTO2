<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PromocionController extends Controller
{
    public function promocionesGet()
    {
        $promociones = DB::select('CALL SP_GET_PROMOCIONES()');

        return response()->json(['Promociones' => $promociones], 200);
    }

    public function promocionesGetID($id_prom)
    {
        $promocion = DB::select("CALL SP_GET_PROMOCION(".$id_prom.")");

        return response()->json(['Producto' => $promocion], 200);
    }

    public function promocionesInsert(Request $request)
    {
        $descripcion    = $request->input('descripcion');
        $fecha_inicio   = $request->input('fecha_inicio');
        $fecha_fin      = $request->input('fecha_fin');

        DB::select('CALL SP_INS_PROMOCIONES(?, ?, ?)', array($descripcion, $fecha_inicio, $fecha_fin));

        return 'Promocion insertada correctamente';
    }

    public function promocionesUpdate(Request $request)
    {
        $id_promocion   = $request->input('id_promocion');
        $descripcion    = $request->input('descripcion');
        $fecha_inicio   = $request->input('fecha_inicio');
        $fecha_fin      = $request->input('fecha_fin');

        DB::statement('CALL SP_UPD_PROMOCIONES(?, ?, ?, ?)', array($id_promocion , $descripcion, $fecha_inicio, $fecha_fin));

        return 'Promocion actualizada correctamente';
    }

    public function eliminarpromocion(Request $request)
    {
        $id_promo = $request->input('id_promo');
        
        $resultado = DB::delete('CALL SP_DEL_PROMOCIONES(?)', [$id_promo]);

        return 'Promocion eliminada correctamente';
    }


}