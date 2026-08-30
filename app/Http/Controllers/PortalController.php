<?php

namespace App\Http\Controllers;
use App\Http\Middleware\PortalMiddleware;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(Request $request){
        return view('portal');
    }

    public function acessonegado(){
        return view('acesso-negado');
    }
}
