<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;
use function Laravel\Prompts\table;

class PedidosController extends Controller
{

 /**
     * Recupera todos los pedidos asociados al usuario con ID 2.    
    */
    public function consulta2(){
        try {
            $pedidos = \DB::table('pedidos')->where('usuario_id', 2)->get();
            return response()->json([
                'datos_encontrados' => $pedidos->count(),
                'pedidos' => $pedidos,
                'estado' => 200
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al obtener los pedidos',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Obtén la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios
     */

    public function consulta3(){
        try {
            $pedidos = \DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select('usuarios.nombre', 'usuarios.correo', 'pedidos.producto', 'pedidos.cantidad', 'pedidos.total')
            ->get();

            return response()->json([
                'datos_encontrados' => $pedidos->count(),
                'datos_obtenidos' => $pedidos,
                'status' => 200
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'error al traer los datos',
                'error' => $e->getMessage(),
                'estatus' => 500
            ], 500);
        }
    }

    /**
     * Recupera todos los pedidos cuyo total esté en el rango de $100 a $250.
     */
    public function consulta4(){
        try {
            
            $pedidos = \DB::table('pedidos')
            ->whereBetween('total', [100, 250])
            ->get();

            return response()->json([
                'datos_encontrados' => $pedidos->count(),
                'datos' => $pedidos,
                'status' => 200
            ],200);

        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'error al traer los datos ',
                'error' => $e->getMessage(),
                'estado' => 500
            ], 500);
        }
    }


    /**
     * Calcula el total de registros en la tabla de pedidos para el usuario con ID 5.
     */
    public function consulta6()   {
        try {
            
            $numeroPedidos = \DB::table('pedidos')
            ->selectRaw('count(*) as numero_de_pedidos_usuario_ID5')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->where('usuarios.id', '=' , '5')
            ->get();

            return response()->json([
                'resultado' => $numeroPedidos,
                'status' => 200
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al traer los datos',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    /**
     * Recupera todos los pedidos junto con la información de los usuarios,
     * ordenándolos de forma descendente según el total del pedido.
     */
    public function consulta7()  {
        try {
            
            $pedidosOrdenados = \DB::table('pedidos')
            ->select('usuarios.nombre', 'usuarios.correo', 'pedidos.producto', 'pedidos.cantidad', 'pedidos.total')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->orderBy('total', 'desc')
            ->get();

            return response()->json([
                'datos_encontrados' => $pedidosOrdenados->count(),
                'datos_obtenidos' => $pedidosOrdenados,
                'status' => 200
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al obtener los pedidos',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    /** 
     * Obtén la suma total del campo "total" en la tabla de pedidos.
    */
    public function consulta8(){
        try {
            
            $totalPedidos = \DB::table('pedidos')
            ->selectRaw('SUM(total) as suma_de_el_total_de_la_tabla_pedidos')
            ->get();

            return response()->json([
                'dato_obtenido' => $totalPedidos,
                'status' => 200
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al obtener el dato',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    /**
     * Encuentra el pedido más económico, junto con el nombre del usuario asociado
     */
    public function consulta9(){
        try {
            
            $pedidoEconomico = \DB::table('pedidos')
            ->select('pedidos.*', 'usuarios.nombre as nombre_de_usuario')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->orderBy('pedidos.total', 'asc')
            ->first();

            return response()->json([
                'dato_obtenido' => $pedidoEconomico,
                'status' => 200
            ], 200);

        } catch (\Exception $e) {
           return response()->json([
                'mensaje' => 'Error al obtener el dato',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    /**
     * Obtén el producto, la cantidad y el total de cada pedido, agrupándolos por usuario
     */
    public function consulta10 (){
        try {
            
            $pedidosOrdenados = \DB::table('pedidos')
            ->select('usuarios.*', 'pedidos.producto', 'pedidos.cantidad', 'pedidos.total')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->orderBy('usuarios.id', 'asc')
            ->get()
            ->groupBy('usuario_id');

            return response()->json([
                'datos_obtenidos' => $pedidosOrdenados,
                'status' => 200
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al obtener los pedidos',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedidos $pedidos)
    {
        //
    }
}
