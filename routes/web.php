<?php

use App\Http\Controllers\api\EmailController;
use Illuminate\Support\Facades\Route;

Route::post('/api/v1/email', [EmailController::class, 'contactoAgrupec'])->name('email.apiRest');