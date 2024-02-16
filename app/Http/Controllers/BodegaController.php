<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegaController extends Controller
{
    function getBodegas() {
        return Bodega::get();
    }
}
