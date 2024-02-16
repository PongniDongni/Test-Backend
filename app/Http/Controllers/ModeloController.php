<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloController extends Controller
{
    function getModelo(Request $request){
        return Modelo::Where('id_marca', $request->id_marca)->get();
    }
}
