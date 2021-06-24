<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbRepresentantes;

class CbRepresentantes2Controller extends Controller
{
  /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $representantes = CbRepresentantes::get();
    return view('representantesu.index')->with('representantes', $representantes);
  }
}
