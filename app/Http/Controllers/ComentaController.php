<?php

namespace App\Http\Controllers;

use App\Comenta;
use Illuminate\Http\Request;

class ComentaController extends Controller
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
    public function create()
    {
        //
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
     * @param  \App\Comenta  $comenta
     * @return \Illuminate\Http\Response
     */
    public function show(Comenta $comenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comenta  $comenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Comenta $comenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comenta  $comenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comenta $comenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comenta  $comenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comenta $comenta)
    {
        //
    }
    public function store2(Request $request){
        if(empty($request->nombre)){
            return response()->json(['mensaje'=>"hay campos vacios",'code'=>'401']);
        }
        $coment=new Comenta();
        $coment->nombre=$request->nombre;
        $coment->descripcion=$request->descripcion;
        $coment->idMovie=$request->idMovie;
        $coment->save();
        return response()->json(['mensaje'=>"datos guardado",'code'=>'200']);
    } 
}
