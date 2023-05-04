<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {

        $ventas =  Venta::get();
        return view('Venta.index', compact('ventas'));
    }
    public function create()
    {
        return view('Cliente.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=> ['required'],
            'nombre'=> ['required'],
            'email'=> ['required'],
            'password'=> ['required']
        ]);
        $cliente = new Cliente();
        $cliente->id = $request->input('codigo');
        $cliente->nombre = $request->input('nombre');
        $cliente->email = $request->input('email');
        $cliente->password = $request->input('password');
        $cliente->save();
        return to_route('clientes.index');
    }

    public function show(Autor $autor)
    {
        //
    }
    public function edit($codigo)
    {
        $venta = Venta::find($codigo);
        return view('Venta.modify', compact('venta'));
    }

    public function update(Request $request, $codigo){
        // Buscar el producto a actualizar en la base de datos
            $venta = Venta::findOrFail($codigo);
        // Actualizar los datos del producto con los valores recibidos del formulario
        $venta->id = $request->input('codigo');
        $venta->fecha = $request->input('fecha');
        $venta->total = $request->input('total');
        $venta->cliente = $request->input('cliente');
        // Guardar los cambios en la base de datos
        $venta->save();
        // Redirigir al usuario a la página de listado de productos
        return redirect()->route('ventas.index');
}
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();
        return redirect()->route('Producto.index');
    }
}
