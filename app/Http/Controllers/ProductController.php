<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Product::paginate(12); //Cantidad de productos que deseas mostrar por página
        return view('productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:300|min:3',
            'modelo' => 'required|string|max:100',
            'categoria' => 'required|string|max:80',
            'marca' => 'required|in:SETER,WIKA,PARKER,FLUKE,DEWIT,FINETEK',
            'descripcion' => 'required|string|max:500|min:10',
            'caracteristicas' => 'required|string|max:500|min:10',
            'material' => 'nullable|string|max:200',
            'conexiones' => 'nullable|string|max:200',
            'rangos' => 'nullable|string|max:200',
            'temperatura' => 'nullable|string|max:200',
            'peso' => 'nullable|string|max:100',
            'normas' => 'nullable|string|max:350',
            'inputImagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $marca = strtoupper($request->input('marca'));

        // Procesar la imagen si se proporciona
        if ($request->hasFile('inputImagen')) {
            $imagenPath = $request->file('inputImagen')->store('public/product_images');
            // Almacena la ruta relativa en lugar de la ruta completa
            $imagenPath = str_replace('public/', '', $imagenPath);
        } else {
            $imagenPath = null;
        }

        // Crear un nuevo producto en la base de datos
        $product = new Product();
        $product->nombre = $request->input('name');
        $product->modelo = $request->input('modelo');
        $product->categoria = $request->input('categoria');
        $product->marca = $request->input('marca');
        $product->descripcion = $request->input('descripcion');
        $product->caracteristicas = $request->input('caracteristicas');
        $product->material = $request->input('material');
        $product->conexiones = $request->input('conexiones');
        $product->rangos = $request->input('rangos');
        $product->temperatura = $request->input('temperatura');
        $product->peso = $request->input('peso');
        $product->normasAplicables = $request->input('normas');
        $product->imagen = $imagenPath;

        // Guardar el producto
        $product->save();
        return redirect()->route('products')->with('success', '¡Producto registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Product::findOrFail($id);
        return view('productDetail', compact('producto'));
    }

    /**
     * Edit the specified resource.
     */
    public function edit($id)
    {
        $producto = Product::findOrFail($id);
        return view('editProduct', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showProductForm($id = null)
    {
        // Obtén la información del producto si se proporciona un ID
        $producto = $id ? Product::findOrFail($id) : null;

        // Si no se encuentra el producto, redirige con un mensaje de error
        try {
            $producto = $id ? Product::findOrFail($id) : null;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('products')->with('error', 'Producto no encontrado');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:300|min:3',
            'modelo' => 'required|string|max:100',
            'categoria' => 'required|string|max:80',
            'marca' => 'required|in:SETER,WIKA,PARKER,FLUKE,DEWIT,FINETEK',
            'descripcion' => 'required|string|max:500|min:10',
            'caracteristicas' => 'required|string|max:500|min:10',
            'material' => 'nullable|string|max:200',
            'conexiones' => 'nullable|string|max:200',
            'rangos' => 'nullable|string|max:200',
            'temperatura' => 'nullable|string|max:200',
            'peso' => 'nullable|string|max:100',
            'normas' => 'nullable|string|max:350',
            'inputImagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtener el producto por ID
        $product = Product::findOrFail($id);

        // Actualizar los campos del producto
        $product->nombre = $request->input('name');
        $product->modelo = $request->input('modelo');
        $product->categoria = $request->input('categoria');
        $product->marca = strtoupper($request->input('marca'));
        $product->descripcion = $request->input('descripcion');
        $product->caracteristicas = $request->input('caracteristicas');
        $product->material = $request->input('material');
        $product->conexiones = $request->input('conexiones');
        $product->rangos = $request->input('rangos');
        $product->temperatura = $request->input('temperatura');
        $product->peso = $request->input('peso');
        $product->normasAplicables = $request->input('normas');

        // Procesar la imagen si se proporciona
        if ($request->hasFile('inputImagen')) {
            // Eliminar la imagen anterior si existe
            if ($product->imagen) {
                Storage::delete($product->imagen);
            }

            $imagenPath = $request->file('inputImagen')->store('public/product_images');
            $product->imagen = str_replace('public/', '', $imagenPath);
        }

        // Guardar los cambios
        $product->save();

        return redirect()->route('productDetail', ['id' => $id])->with('success', '¡Producto actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Busca el producto por ID
        $product = Product::findOrFail($id);

        // Elimina la imagen asociada si existe
        if ($product->imagen) {
            Storage::delete($product->imagen);
        }

        // Elimina el producto de la base de datos
        $product->delete();

        // Redirige a la página de productos o a donde desees
        return redirect()->route('products')->with('success', '¡Producto eliminado con éxito!');
    }
}
