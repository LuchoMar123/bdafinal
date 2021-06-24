<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbRelaciones;

class CbRelaciones2Controller extends Controller
{
  /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $relaciones = CbRelaciones::get();
    return view('relacionesu.index')->with('relaciones', $relaciones);
  }
}
