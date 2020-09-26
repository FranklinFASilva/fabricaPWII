<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChocolateController extends Controller
{
    public function chocolates(){

        $subtitulo = 'Lista de Chocolates';

        $chocolates = ['Ao leite', 'Branco', 'Meio amargo'];

        return view('admin.chocolates.index', compact('subtitulo', 'chocolates'));
    }
}
