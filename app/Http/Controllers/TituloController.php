<?php

namespace FlCobrancas\Http\Controllers;

use FlCobrancas\Http\Requests;
use FlCobrancas\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Home';
        $data['titulos'] = Titulo::orderBy('id')->get();

        return view('titulos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Cadastro de Título';

        return view('titulos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \FlCobrancas\Http\Requests\TituloRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\TituloRequest $request)
    {
        Titulo::create($request->all());
        $request->session()->flash('success', 'Título cadastrado com sucesso.');

        return redirect()->route('titulos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}