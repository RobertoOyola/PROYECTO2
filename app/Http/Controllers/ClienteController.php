<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    public function clientesGet()
    {
        $clientes = DB::select('CALL SP_GET_CLIENTES()');

        return response()->json(['clientes' => $clientes], 200);
    }

    public function clienteGetCedula($cedula)
    {
        $clientes = DB::select('CALL SP_GET_CLIENTE(?)', array($cedula));

        return response()->json(['cliente' => $clientes], 200);
    }

    public function clienteInsert(Request $request)
    {
        $validatedData = $request->validate([
            'cedula' => 'required|string|max:20',
            'nombre' => 'required|string|max:100',
        ]);

        $cedula = $request->input('cedula');
        $nombre = $request->input('nombre');

        DB::select('CALL SP_INS_CLIENTES(?, ?)', array($cedula, $nombre));

        return 'Cliente insertado correctamente';
    }

    public function clienteUpdate(Request $request)
    {
        $cedula = $request->input('cedula');
        $nombre = $request->input('nombre');

        DB::statement('CALL SP_UPD_CLIENTES(?, ?)', array($cedula, $nombre));

        return 'Nombre del cliente actualizado correctamente';
    }

    public function eliminarCliente(Request $request)
    {
        $cedula = $request->input('cedula');
        
        $resultado = DB::delete('CALL SP_DEL_CLIENTES(?)', [$cedula]);

        return 'Cliente eliminado correctamente';
    }
}

