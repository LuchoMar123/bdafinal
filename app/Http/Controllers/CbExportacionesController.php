<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbExportaciones;

class CbExportacionesController extends Controller
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
    return view('exportaciones.index')->with('exportaciones', $exportaciones);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'id_producto'=>'required','nombre'=>'required','cantidad'=>'required']);
  CbExportaciones::create($request->all());
  return redirect()->route('exportaciones.index')->with('success','Registro creado satisfactoriamente');
  }
  /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     //
     $exportacion = CbExportaciones::find($id);
     $exportacion -> delete();
     return redirect()->route('exportaciones.index');
    }
}
