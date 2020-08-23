<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Comenta;

class ComentarioController extends Controller
{
    public function show($id){
        $coment=Comenta::where('idMovie',$id)->get();
        return response()->json(['comentario'=>$coment]);
    }

    public function store(Request $request){
        if(empty($request->nombre)){
            return response()->json(['mensaje'=>"hay campos vacios",'code'=>'401']);
        }
        $coment=new Comentario();
        $coment->nombre=$request->nombre;
        $coment->descripcion=$request->descripcion;
        $coment->idMovie=$request->idMovie;
        $coment->save();
        return response()->json(['mensaje'=>"datos guardado",'code'=>'200']);
    } 
}

