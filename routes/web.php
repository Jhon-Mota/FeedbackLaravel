<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');

Route::get('index-employee', [EmployeeController::class, 'index'])->name('employee.index');