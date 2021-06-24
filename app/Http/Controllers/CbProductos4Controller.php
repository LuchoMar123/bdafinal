<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbProductos4;

class CbProductos4Controller extends Controller
{
    /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $productos4 = CbProductos4::get();
    return view('productos4.index')->with('productos4', $productos4);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'nombre'=>'required', 'tipo'=>'required','precio'=>'required','cantidad'=>'required','descripcion'=>'required']);
  CbProductos4::create($request->all());
  return redirect()->route('productos4.index')->with('success','Registro creado satisfactoriamente');
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
    $producto4 = CbProductos4::find($id);
    $producto4 -> delete();
    return redirect()->route('productos4.index');
    }
}