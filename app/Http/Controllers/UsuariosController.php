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
            
            $usuarios = \DB::table('usuarios')
            ->where('nombre', 'LIKE', 'R%')
            ->get();

            return response()->json([
                'datos_obtenidos' => $usuarios->count(),
                'datos' => $usuarios,
                'status' => 200
            ], 200);
 
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al obtener los datos',
                'error' => $e->getMessage(),
                "status" => 500
            ], 500);
        }
    }











    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
        $usuarios = Usuarios::all();
        return response()->json([
            'usuarios obtenidos' => $usuarios, 'estatus' => 200
        ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al obtener los usuarios',
                 'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $usuario = Usuarios::create($request->all());
            return response()->json([
                'mensaje' => 'Usuario creado exitosamente',
                'usuario' => $usuario,
                'estado' => 201
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al crear el usuario',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }

   
}
