<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblRequisiciones;

class ComprasController extends Controller
{
    //Obtiene la lista de requisiciones y redirecciona a la pagina
    public function GetRequisiciones(){
        $TblRequisiciones = [];
       // $TblRequisiciones = TblRequisiciones::all();
            return view('Administracion.Compras.Requisicion', compact('TblRequisiciones'));
        }
        
        
        public function Requisicion(Request $request){
        $inputs = $request->all();
        
        return view('Administracion.Compras.GetRequisicion', compact('inputs'));
        }
}
