<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

Route::get('backend/dashboard' , [DashboardController::class , 'index']);

