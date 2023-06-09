<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {

        $clientes =  Cliente::get();
        return view('Cliente.index', compact('clientes'));
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

    public function show( $autor)
    {
        //
    }

    public function edit($codigo)
    {
        $cliente = Cliente::find($codigo);
        return view('Cliente.modify', compact('cliente'));
    }
    public function update(Request $request, $codigo){
        // Buscar el producto a actualizar en la base de datos
        $cliente = Cliente::findOrFail($codigo);

        // Actualizar los datos del producto con los valores recibidos del formulario
        $cliente->nombre = $request->input('nombre');
        $cliente->id = $request->input('codigo');

        // Guardar los cambios en la base de datos
        $cliente->save();

        // Redirigir al usuario a la página de listado de productos
        return redirect()->route('clientes.index');
}
    public function destroy($id)
    {
        Cliente::destroy($id);

        return redirect()->route('clientes.index');
    }
}
