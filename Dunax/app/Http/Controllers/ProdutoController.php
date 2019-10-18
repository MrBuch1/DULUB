<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Produto::where([
            'categoria_id' => 1,
        ])->get();
        return view('products.index', compact('registros'));
    }

    public function produto($id = null)
    {

        if(!empty($id)){
            $registros = Produto::where([
                'id' => $id,
            ])->first();

            if(!empty($registros)){
                $registros = Produto::find($id);
                $array = explode('</br>', $registros->descricao);

                return view('produto', compact('registros', 'array'));

            }
        }

    }

    public function downloadFicha($id = null)
    {

        if(!empty($id)){
            $registros = Produto::where([
                'id' => $id,
            ])->first();

            if(!empty($registros)){
                $registros = Produto::find($id);
                $array = explode('</br>', $registros->descricao);
                $ficha = DB::table('produtos')->where('id', $id)->get();
                
                foreach($ficha as $f){
                    $ficha = $f->ficha;
                    $resp = response()->download($ficha);
                }
                
                return $resp;

            }
        }

    }

    public function downloadFispq($id = null)
    {

        if(!empty($id)){
            $registros = Produto::where([
                'id' => $id,
            ])->first();

            if(!empty($registros)){
                $registros = Produto::find($id);
                $array = explode('</br>', $registros->descricao);
                $ficha = DB::table('produtos')->where('id', $id)->get();
                
                foreach($ficha as $f){
                    $ficha = $f->fispq;
                    $resp = response()->download($ficha);
                }
                
                return $resp;

            }
        }

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }

    /* -------------- Views dos Produtos -------------- */

    public function otto()
    {
        $registros = Produto::where([
            'categoria_id' => 1
        ])->get();

        return view('products.otto', compact('registros'));
    }

    public function diesel()
    {
        $registros = Produto::where([
            'categoria_id' => 2
        ])->get();

        return view('products.diesel', compact('registros'));
    }

    public function motos()
    {
        $registros = Produto::where([
            'categoria_id' => 3
        ])->get();

        return view('products.motos', compact('registros'));
    }

    public function trans()
    {
        $registros = Produto::where([
            'categoria_id' => 4
        ])->get();

        return view('products.transmissao', compact('registros'));
    }

}
