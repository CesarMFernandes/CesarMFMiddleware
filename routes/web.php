<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PortalController;
use App\Http\Middleware\PortalMiddleware;

Route::get('/', [LandingController::Class, 'index']);
Route::post('/portal', [PortalController::Class, 'index'])
->middleware(PortalMiddleware::class)
->name('portal.index');

Route::get('/acesso-negado', [PortalController::class, 'acessoNegado'])
    ->name('acesso.negado');