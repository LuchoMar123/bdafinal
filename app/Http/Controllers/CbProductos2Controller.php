<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\Models\CbProductos2;

class CbProductos2Controller extends Controller
{
    /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $productos2 = CbProductos2::get();
    return view('productos2.index')->with('productos2', $productos2);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'nombre'=>'required', 'tipo'=>'required','precio'=>'required','cantidad'=>'required','descripcion'=>'required']);
  CbProductos2::create($request->all());
  return redirect()->route('productos2.index')->with('success','Registro creado satisfactoriamente');
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
  $producto2 = CbProductos2::find($id);
  $producto2 -> delete();
  return redirect()->route('productos2.index');
  }
}
