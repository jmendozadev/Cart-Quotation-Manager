<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BrandController extends Controller
{
    public function index(Request $request, $marca)
    {
        // Puedes usar $marca directamente o validar si existe, según tus necesidades.

        $productos = Product::where('marca', $marca)->paginate(12);
        return view('productos', compact('productos'));
    }
}