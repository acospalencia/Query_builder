<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use DB;
use Illuminate\Http\Request;



class UsuariosController extends Controller
{

    /**
     * Encuentra todos los usuarios cuyos nombres comiencen con la letra "R"
     */
    public function consulta5()  {
        try {
            
            // Consulta a la tabla 'usuarios' buscando nombres que empiecen con "R"
            $usuarios = \DB::table('usuarios')
            ->where('nombre', 'LIKE', 'R%')
            ->get();

            // Devuelve la cantidad encontrada y los datos obtenidos
            return response()->json([
                'datos_obtenidos' => $usuarios->count(), // Número total de usuarios encontrados
                'datos' => $usuarios, // Lista de usuarios que cumplen la condición
                'status' => 200
            ], 200);
 
        } catch (\Exception $e) {

            // Respuesta en caso de error durante la consulta
            return response()->json([
                'mensaje' => 'Error al obtener los datos',
                'error' => $e->getMessage(), // Detalle del error
                "status" => 500
            ], 500);
        }
    }



}
