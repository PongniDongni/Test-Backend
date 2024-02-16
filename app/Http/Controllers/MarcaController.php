<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    function getMarcas() {
        return Marca::All();
    }
}
