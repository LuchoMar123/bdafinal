<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbPaises;

class CbPaises2Controller extends Controller
{
  /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $paises = CbPaises::get();
    return view('paisesu.index')->with('paises', $paises);
  }
}
