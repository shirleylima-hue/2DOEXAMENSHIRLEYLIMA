<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('empleados')->insert([
            [
                'nombre' => 'Shirley',
                'apellido' => 'Lima',
                'correo' => 'shirley.lima@gmail.com',
                'salario' => 5000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido' => 'Carrillo',
                'correo' => 'mariac@gmail.com',
                'salario' => 4500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'correo' => 'carlos.lopez@gmail.com',
                'salario' => 3000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
