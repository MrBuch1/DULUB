<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('documentos.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.create_documento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docs = new Documentos();

        $docs->data_credito = $request->input('data');
        $docs->cliente      = $request->input('cliente');
        $docs->valor        = $request->input('valor');
        $docs->referencia   = $request->input('referencia');
        $docs->banco        = $request->input('empresa');
        $docs->topmanager   = $request->input('top');

        $docs->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documentos  $Documentos
     * @return \Illuminate\Http\Response
     */
    public function show(Documentos $documentos)
    {
        $docs = Documentos::all();

        return view('documentos.listar_documentos', compact('docs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documentos  $Documentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = Documentos::find($id);

        return view('documentos.edit_documento', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documentos  $Documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docs = Documentos::find($id);

        $docs->cliente      = $request->input('cliente')    != null ? $request->input('cliente')    : $docs->cliente;
        $docs->referencia   = $request->input('referencia') != null ? $request->input('referencia') : $docs->referencia;

        $docs->save();

        return redirect()->route('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documentos  $Documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentos $documentos)
    {
        //
    }
}
