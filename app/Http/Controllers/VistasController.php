<?php

namespace App\Http\Controllers;

use App\Models\Particula;
use App\Models\User;
use Illuminate\Http\Request;

class VistasController extends Controller{
    //metodo para asociarlo a la ruta /holamundo
    public function index(){

        $datos['pagina'] = 'Particulas Cuanticas';
                return view('inicio', $datos);

       
    }

    public function particulas()
    {
        $datos['pagina'] = 'Particulas Cuanticas';
        $datos['particulas'] = Particula::all(); // Obtiene todas las partículas utilizando el modelo "Particula"
        
        return view('particulas',$datos);
    }
    
    public function particula($idparticula){
        $datos['pagina'] = 'Particulas subatomicas';
        $datos['particula'] = Particula::find($idparticula);
        return view('particula')->with($datos);

    }
    public function alta(){

        $datos['pagina'] = 'Particulas Cuanticas';
        return view('alta')->with($datos);
    }

    
}
