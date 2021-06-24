<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbProductos5;

class CbProductos5Controller extends Controller
{
    /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $productos5 = CbProductos5::get();
    return view('productos5.index')->with('productos5', $productos5);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'nombre'=>'required', 'tipo'=>'required','precio'=>'required','cantidad'=>'required','descripcion'=>'required']);
  CbProductos5::create($request->all());
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
    $producto5 = CbProductos5::find($id);
    $producto5 -> delete();
    return redirect()->route('productos5.index');
    }
}
