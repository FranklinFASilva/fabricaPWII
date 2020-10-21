<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ChocolateRequest;
use App\Models\Chocolate;

class ChocolateController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Lista de Chocolates';
        $chocolates = Chocolate::orderBy('nome', 'asc')->get();

        return view('admin.chocolates.index', compact('subtitulo', 'chocolates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('admin.chocolates.store');
        return view('admin.chocolates.form', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChocolateRequest $request)
    {
        Chocolate::create($request->all());

        $request->session()->flash('sucesso', "Chocolate $request->nome inserido com sucesso!");

        return redirect()->route('admin.chocolates.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chocolate = Chocolate::find($id);
        $action = route('admin.chocolates.update', $chocolate->id);
        return view('admin.chocolates.form', compact('chocolate', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChocolateRequest $request, $id)
    {
        $chocolate = Chocolate::find($id);
        $chocolate->update($request->all());

        $request->session()->flash('sucesso', "Chocolate $request->nome editado com sucesso!");
        return redirect()->route('admin.chocolates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Chocolate::destroy($id);
        $request->session()->flash('sucesso', "Chocolate excluído com sucesso!");
        return redirect()->route('admin.chocolates.index');
    }
}
