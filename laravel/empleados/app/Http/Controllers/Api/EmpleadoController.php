<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    // GET /api/empleados
    public function index()
    {
        return response()->json(Empleado::all());
    }

    // POST /api/empleados
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:empleados,correo',
            'salario' => 'required|numeric|min:0',
        ]);

        $empleado = Empleado::create($validated);

        return response()->json([
            'message' => 'Empleado creado exitosamente',
            'empleado' => $empleado
        ], 201);
    }
}
