<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticia = DB::table('noticias')->get();

        return view('noticias', compact('noticia', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.noticias_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
            'imagem' => 'file',
        ]);
        
        $noticia = new Noticia;

        $noticia->titulo   = $request->input('titulo');
        $noticia->conteudo = $request->input('conteudo');
        $path              = $request->file('imagem')->store('images/Noticias', 'public');
        $noticia->imagem   = $path;

        date_default_timezone_set('America/Sao_Paulo');
        $noticia->created_at = date("Y-m-d H:i:s");

        $noticia->save();

        return redirect()->route('noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        if(!empty($id)){
            $noticia = Noticia::where([
                'id' => $id,
            ])->first();

            if(!empty($noticia)){
                $noticia = Noticia::find($id);
                $array = explode('</br>', $noticia->descricao);

                return view('noticias.noticia', compact('noticia', 'array'));

            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
