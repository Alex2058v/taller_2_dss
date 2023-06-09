<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request){
        $usuario = DB::table('clientes')
            ->where('nombre', '=', $request->input('nombre_usuario'))
            ->first();

        if (is_null($usuario)) {
            // usuario no encontrado, volver al login
            return view('login');
        }

        $contrasenia = DB::table('clientes')
            ->where('password', '=', $request->input('password'))
            ->first();

        if (is_null($contrasenia)) {
            // si la contraseña no conicide regresara al login
            return view('login');
        }

        $nombre = $usuario->nombre;
        if ($nombre == 'admin') {
            // usuario encontrado, redirigir a la página de inicio
            return view('welcome');
        } else {
            // redirigir al controlador PublicoController, pasando el usuario como parámetro
            return redirect()->action([PublicoController::class, 'index'], ['usuario' => $usuario]);
        }
    }

    public function create()
{
    return view('registro');
}
    public function guardar(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre = $request->input('nombre_usuario');
        $cliente->email = $request->input('email');
        $cliente->password = $request->input('password');
        $cliente->save();
        return redirect()->route('login');
    }
}