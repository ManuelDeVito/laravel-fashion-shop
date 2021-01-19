<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $all_dresses = Dress::all();

        $data = [
            'brand' => 'Zara',
            'dresses' => $all_dresses
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
