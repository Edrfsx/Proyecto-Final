<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller as BaseController;

class LoginController extends Controller{

    public function index(){
        return view("login");
    }

    public function login(Request $request){
        $data = \App\Models\Login::select('usuario', 'contraseña','tipo')
        ->firstOrFail();

        
    }
}