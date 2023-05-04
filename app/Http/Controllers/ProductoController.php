<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos =  Producto::with('Categoria')->get();
        return view('Producto.index', compact('productos'));
    }

    public function create()
    {
        $categorias=Categoria::all();
        return view('Producto.create', compact('categorias'));
    }

    public function store(Request $request)
{
    $producto = new Producto();
    $producto->nombre = $request->input('nombre');
    $producto->codigo = $request->input('codigo');
    $producto->descripcion = $request->input('descripcion');
    $producto->imagen = file_get_contents($request->file('imagen')->getRealPath());
    $producto->categoria = $request->input('categoria');
    $producto->precio = $request->input('precio');
    $producto->existencias = $request->input('existencias');
    $producto->save();
    return to_route('productos.index');
}

    public function show(Producto $codigo)
    {
        $producto = Producto::find($codigo);
        return view('Producto.index');
    }

    public function edit($codigo)
    {
        $producto = Producto::find($codigo);
        return view('Producto.modify', compact('producto'));
    }

    public function update(Request $request, $codigo){
    // Buscar el producto a actualizar en la base de datos
    $producto = Producto::findOrFail($codigo);

    // Actualizar los datos del producto con los valores recibidos del formulario
    $producto->nombre = $request->input('nombre');
    $producto->codigo = $request->input('codigo');
    $producto->descripcion = $request->input('descripcion');
    $producto->imagen = $request->input('imagen');
    $producto->categoria = $request->input('categoria');
    $producto->precio = $request->input('precio');
    $producto->existencias = $request->input('existencias');
    // Guardar los cambios en la base de datos
    $producto->save();
    // Redirigir al usuario a la página de listado de productos
    return redirect()->route('productos.index');
    }


    public function destroy($producto)
    {
        Producto::destroy($producto);
        return redirect()->route('productos.index');
    }
}
