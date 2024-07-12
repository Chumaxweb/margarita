<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function cuarto() {
        return view('videos.cuarto');
    }
    public function quinto($dos) {
        return view('videos.quinto', [
            'dos' => $dos
        ]);
    }
}
