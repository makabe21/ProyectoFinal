<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Productos;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $compras = Compras::all(); 

        return view ('Compras/list', compact('compras'));
    }

    public function editar($id){
    $compras = Compras::findOrFail($id); 
    return view ('Compras/editar', compact('compras'));
    }
    public function borrar($id){
        $compras = Compras::find($id);
        $compras->delete();
        return redirect('Compras/list');
       }

    public function create()
    {
        return view('Compras/registro');
    }
    public function guardar(Request $request)
    {
        $compras = new compras();
        $compras->nit = $request->nit;
        $compras->nombre = $request->nombre;
        $compras->direccion = $request->direccion;
        $compras->fecha = $request->fecha;
        $compras->estado = "activo";
        $compras->save();
        return redirect('Compras/list');
    }
    public function updatee(request $request, Compras $compras)
 {
    $compras->nit = $request->nit;
    $compras->nombre = $request->nombre;
    $compras->direccion = $request->direccion;
    $compras->fecha = $request->fecha;
    $compras->estado = "activo";

     $compras->save();
     return redirect('Compras/list');
 }

 public function agregar()
    {
    
    $productos = Productos::all();
    return view ('Compras/agregar', compact('productos'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit(Compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compras $compras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compras $compras)
    {
        //
    }
}
