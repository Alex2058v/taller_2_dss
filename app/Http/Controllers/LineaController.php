<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use Illuminate\Http\Request;

class LineaController extends Controller
{
    public function index()
    {

        $lineas =  Linea::all();
        return view('Linea.index', compact('lineas'));
    }
    public function create()
    {
        return view('Linea.create');
    }

    public function store(Request $request)
    {
        $linea = new Linea();
        $linea->codigo_producto = $request->input('codigo');
        $linea->id_venta = $request->input('id');
        $linea->cantidad = $request->input('cantidad');
        $linea->precio_unitario = $request->input('precio');
        $linea->save();
        return to_route('lineas.index');
    }

    public function show( $autor)
    {
        //
    }

    public function edit($codigo)
    {
        // $autor=Autor::find($id);
        //return view('Producto.modify', $id);
        $producto = Linea::find($codigo);
    return view('Linea.modify', compact('producto'));
    }
    public function update(Request $request, $codigo){
    // Buscar el producto a actualizar en la base de datos
    $lineas = Producto::findOrFail($codigo);
    // Actualizar los datos del producto con los valores recibidos del formulario
    $lineas->codigo_producto = $request->input('codigo');
    $lineas->id_venta = $request->input('id');
    $lineas->cantidad = $request->input('cantidad');
    $lineas->precio_unitario = $request->input('precio');
    // Guardar los cambios en la base de datos
    $lineas->save();
    // Redirigir al usuario a la página de listado de productos
    return redirect()->route('lineas.index');
    }
    public function destroy($id)
    {
        //
        $producto = Producto::find($id)->delete();
        return redirect()->route('Producto.index');
    }
}
