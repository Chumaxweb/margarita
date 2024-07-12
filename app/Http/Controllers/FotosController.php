<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotosController extends Controller
{
    public function segundo()  {
        return view('fotos.segundo');
    }
    public function tercero($uno) {
        return view('fotos.tercero', [
            'uno' => $uno
        ]);
    }
}

