<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    //Controlador para la vista de usuarios y login
    public function index(){
   // $Usuarios = Usuarios::all()->toArray();
   /// return response()->json($Usuarios);
    }
}
