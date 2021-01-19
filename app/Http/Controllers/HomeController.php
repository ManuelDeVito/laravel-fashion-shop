<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'brand' => 'Zara'
        ];
        return view('home', $data);
    }

    public function contatti() {
        $data = [
            'servizi' => 'Contattaci'
        ];
        return view('contatti', $data);
    }
}
