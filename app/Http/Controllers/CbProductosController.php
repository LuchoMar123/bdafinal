<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\CbProductos;

class CbProductosController extends Controller
{
    /**
  * Muestra una lista de los paises.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas los paises
    $productos = CbProductos::get();
    return view('productos.index')->with('productos', $productos);
  }
  public function store(Request $request)
  {
  //
  $this->validate($request,[ 'nombre'=>'required','tipo'=>'required','precio'=>'required','cantidad'=>'required','descripcion'=>'required']);
  CbProductos::create($request->all());
  return redirect()->route('productos.index')->with('success','Registro creado satisfactoriamente');
  }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    $this->validate($request,[ 'nombre'=>'required', 'tipo'=>'required', 'precio'=>'required', 'cantidad'=>'required', 'descripcion'=>'required']);
    CbProductos::find($id)->update($request->all());
    return redirect()->route('productos.index')->with('success','Registro actualizado satisfactoriamente');

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
    $producto = CbProductos::find($id);
    $producto -> delete();
    return redirect()->route('productos.index');
    }

}
