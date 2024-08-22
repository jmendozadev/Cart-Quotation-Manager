<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signUp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:40|min:4',
            'apellidopaterno' => 'required|string|max:30|min:4',
            'apellidomaterno' => 'required|string|max:30|min:4',
            'email' => 'required|email|unique:usuarios|max:50',
            'pwd' => 'required|string|max:25|min:8|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}/'
        ]);

        // Obtener el código de empleado en minúsculas
        $codigoEmpleado = strtolower($request->input('empleado'));

        // Verificar el código de empleado y asignar el tipo de usuario correspondiente
        $tipoUsuario = $codigoEmpleado === 'seter576' ? 'Empleado' : 'Cliente';

        // Crear un nuevo usuario en la base de datos
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidoPaterno = $request->input('apellidopaterno');
        $usuario->apellidoMaterno = $request->input('apellidomaterno');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('pwd')); // Utilizar Hash para cifrar la contraseña
        $usuario->tipo = $tipoUsuario;
        $usuario->save();

        return redirect()->route('login')->with('success', '¡Usuario registrado con éxito!');
    }
}