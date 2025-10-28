
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmpleadoController;

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::post('/empleados', [EmpleadoController::class, 'store']);