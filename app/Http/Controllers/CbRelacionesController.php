<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbRelaciones;

class CbRelacionesController extends Controller
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
    return view('relaciones.index')->with('relaciones', $relaciones);
  }
}
