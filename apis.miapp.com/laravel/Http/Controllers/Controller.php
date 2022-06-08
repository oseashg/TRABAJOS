<?php

namespace App\Http\Controllers\v1;

use app\http\controllers\controller;

use app\models\v1\productos;


class productosController extends Controller
{
    funcion obtenerlistado()
    {
      return productos: :all();
    }
}
