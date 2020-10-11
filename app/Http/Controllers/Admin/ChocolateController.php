<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ChocolateRequest;
use App\Models\Chocolate;


class ChocolateController extends Controller
{
    public function chocolates(){

        $subtitulo = 'Lista de Chocolates';

        //$chocolates = ['Ao leite', 'Branco', 'Meio amargo'];

        $chocolates = Chocolate::all();

        return view('admin.chocolates.index', compact('subtitulo', 'chocolates'));
    }

    public function formAdicionar()
    {
        return view('admin.chocolates.form');
    }

    public function adicionar(ChocolateRequest $request)
    {
        //criando um objeto
        Chocolate::create($request->all());

        $request->session()->flash('sucesso', "$request->nome inserido com sucesso!");

        return redirect()->route('admin.chocolates.listar');
    }
}
