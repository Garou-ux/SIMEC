<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuarios;



class LoginController extends Controller
{
    //redirecciona a la pestaña de login
    public function index(){
    $Usuarios = [];
    //$Usuarios = Usuarios::all();
        return view('Administracion.Login', compact('Usuarios'));
    }

    //valida el login
    public function ValidateUser(Request $request){
    //dd($request->all());
    $inputs = $request->all();
     $bandera = true;
    // $URL = url('/IndexMenu');
    // return response()->json([ 'bandera' => $bandera, 'URL' => $URL], 200);
     return view('Administracion.IndexMenu', compact('inputs'));
    }
}
