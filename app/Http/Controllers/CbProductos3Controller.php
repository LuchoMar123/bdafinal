<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbProductos3;

class CbProductos3Controller extends Controller
{
    /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $productos3 = CbProductos3::get();
    return view('productos3.index')->with('productos3', $productos3);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'nombre'=>'required', 'tipo'=>'required','precio'=>'required','cantidad'=>'required','descripcion'=>'required']);
  CbProductos3::create($request->all());
  return redirect()->route('productos3.index')->with('success','Registro creado satisfactoriamente');
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
    $producto3 = CbProductos3::find($id);
    $producto3 -> delete();
    return redirect()->route('productos3.index');
    }
}