<?php

use App\Http\Controllers\api\EmailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/api/email', [EmailController::class, 'contactoAgrupec'])->name('email.apiRest');