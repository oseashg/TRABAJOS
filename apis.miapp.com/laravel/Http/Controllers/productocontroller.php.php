<?php

namespace App\Http\Controllers\v1;

use iluminate\http\request;
use app\http\controllers\controler;
use app\models\v1\productos;




class productosController extends controller
{
    function obtenerlistado()
    {

        return productos::all();
    }

     function obtenerelemento($id)
    {

        $productos= productos::find($id);

        return $productos;
    }

    function guardar(request $request)
    {
        $productos=  new productos();
        $productos->codigo=$request->codigo;
        $productos->nombre = $request->nombre;
        $productos->save();
    }

    function editarput(request $request)
    {
        $productos = productos::find($request->id);

        $productos->codigo=$request->codigo;
        $productos->nombre=$request->nombre;
        $productos->save();

    }

    function editarpatch(request $request)
    {
        $productos = productos::find($request->id);

        if($request->codigo)
            $productos->codigo=$request->codigo;

        if($request->nombre)
            $productos->nombre=$request->nombre
        $productos->save();

    }



    funcion eliminar($id)
    {
        $cproductos = productos::find();
        $productos->delete();
    }
}
