<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbExportaciones;

class CbExportaciones2Controller extends Controller
{
  /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $exportaciones = CbExportaciones::get();
    return view('exportacionesu.index')->with('exportaciones', $exportaciones);
  }
}
