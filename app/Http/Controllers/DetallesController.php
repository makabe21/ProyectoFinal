<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
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
    public function guardar(Request $request)
    {    
          
            $product = new Detalles();
            $product->nombre = $request->productos_id;
            $product->precio = $request->precio;
            $product->cantidad = $request->cantidad;
            $product->total = $request->cantidad*$request->precio ;
            $product->save();
       
            
            return redirect('Compras/factura'); 
        }
    
    public function factura ()
    
    {
        $productos = Detalles::all(); 
        
        return view ('Compras/factura', compact('productos'));
    }
    
    public function eliminar($id){
        $product = Detalles::find($id);
        $product->delete();
        return redirect('Compras/factura');
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
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles $detalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalles $detalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalles $detalles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalles $detalles)
    {
        //
    }
}
