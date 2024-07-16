<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    public function productosGet()
    {
        $productos = DB::select('CALL SP_GET_PRODUCTOS()');

        return response()->json(['Productos' => $productos], 200);
    }

    public function productosGetID($id_prod)
    {
        $producto = DB::select("CALL SP_GET_PRODUCTO(".$id_prod.")");

        return response()->json(['Producto' => $producto], 200);
    }

    public function productosInsert(Request $request)
    {
        $validatedData = $request->validate([
            'codigo'        => 'required|string|max:20',
            'descripcion'   => 'required|string|max:100',
        ]);

        $codigo         = $request->input('codigo');
        $descripcion    = $request->input('descripcion');
        $precio         = $request->input('precio');

        DB::select('CALL SP_INS_PRODUCTOS(?, ?, ?)', array($codigo, $descripcion, $precio));

        return 'Producto insertado correctamente';
    }

    public function productosUpdate(Request $request)
    {
        $id_producto = $request->input('id_producto');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');

        DB::statement('CALL SP_UPD_PRODUCTOS(?, ?, ?)', array($id_producto , $descripcion, $precio));

        return 'Producto actualizado correctamente';
    }

    public function eliminarProducto(Request $request)
    {
        $id_producto = $request->input('id_producto');
        
        $resultado = DB::delete('CALL SP_DEL_PRODUCTOS(?)', [$id_producto]);

        return 'Producto eliminado correctamente';
    }


}