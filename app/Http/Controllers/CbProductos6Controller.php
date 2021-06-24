<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbProductos6;

class CbProductos6Controller extends Controller
{
    /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $productos6 = CbProductos6::get();
    return view('productos6.index')->with('productos6', $productos6);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'nombre'=>'required', 'tipo'=>'required','precio'=>'required','cantidad'=>'required','descripcion'=>'required']);
  CbProductos6::create($request->all());
  return redirect()->route('productos5.index')->with('success','Registro creado satisfactoriamente');
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
    $producto6 = CbProductos6::find($id);
    $producto6 -> delete();
    return redirect()->route('productos6.index');
    }
}