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
        $supreme = Produto::where([
            'categoria_id' => 17
        ])->get();

        return view('products.otto', compact('registros', 'supreme'));
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

    public function engrenagens()
    {
        $registros = Produto::where([
            'categoria_id' => 5
        ])->get();

        return view('products.engrenagens', compact('registros'));
    }

    public function industrial()
    {
        return view('products.industrial');
    }

    public function graxas()
    {
        $registros = Produto::where([
            'categoria_id' => 6
        ])->get();

        return view('products.graxas', compact('registros'));
    }

    public function arla()
    {
        $registros = Produto::where([
            'categoria_id' => 7
        ])->get();

        return view('products.arla32', compact('registros'));
    }

    public function equipamentos()
    {
        $registros = Produto::where([
            'categoria_id' => 8
        ])->get();

        return view('products.equipamentos', compact('registros'));
    }

    public function hidraulicos()
    {
        $registros = Produto::where([
            'categoria_id' => 9
        ])->get();

        return view('products.industriais.hidraulicos', compact('registros'));
    }

    public function refrigeracao()
    {
        $registros = Produto::where([
            'categoria_id' => 10
        ])->get();

        return view('products.industriais.refrigeracao', compact('registros'));
    }

    public function compressores()
    {
        $registros = Produto::where([
            'categoria_id' => 11
        ])->get();

        return view('products.industriais.compressores', compact('registros'));
    }

    public function engrenagens_industriais()
    {
        $registros = Produto::where([
            'categoria_id' => 12
        ])->get();

        return view('products.industriais.engrenagens_ind', compact('registros'));
    }

    public function termicos()
    {
        $registros = Produto::where([
            'categoria_id' => 13
        ])->get();

        return view('products.industriais.termicos', compact('registros'));
    }

    public function desmoldantes()
    {
        $registros = Produto::where([
            'categoria_id' => 14
        ])->get();

        return view('products.industriais.desmoldantes', compact('registros'));
    }

    public function textil()
    {
        $registros = Produto::where([
            'categoria_id' => 15
        ])->get();

        return view('products.industriais.textil', compact('registros'));
    }

    public function transformadores()
    {
        $registros = Produto::where([
            'categoria_id' => 16
        ])->get();

        return view('products.industriais.transformadores', compact('registros'));
    }

}
