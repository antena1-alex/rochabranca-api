<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController;

Route::post('/contact', [ContactController::class, 'send']);
Route::post('/lead', [LeadController::class, 'store']);