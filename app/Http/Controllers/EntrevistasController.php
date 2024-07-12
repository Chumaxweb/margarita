<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrevistasController extends Controller
{
    public function mintre() {
        return view('entrevistas.mintre');
    }

    public function entre($pesca) {
        return view('entrevistas.entre', ['pesca' => $pesca]);
    }

    public function vientre($pesca, $muni = null) {

        if($muni) {
            return "Entrevista de $pesca en $muni";
        }else{
            return "Entrevista de $pesca";
        }
    }
};

