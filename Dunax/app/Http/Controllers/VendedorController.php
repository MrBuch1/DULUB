<?php

namespace App\Http\Controllers;

use App\Vendedor;
use App\Formdespesas;
use App\Formkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('vendedores.formulario');
    }

    public function formKm()
    {
        return view('vendedores.form_km');
    }

    public function formDespesas()
    {
        return view('vendedores.form_despesas');
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
    public function createKm(Request $request)
    {   
        $request->validate([
            'periodo' => 'required',
            'data' => 'required',
            'km' => 'required',
            'imagem_comprovante' => 'required|image',
        ]);

        $id_vendedor = Auth::id();

        $form_km = new Formkm();

        $path = $request->file('imagem_comprovante')->store('images/Vendedores/Quilometragem', 'public');

        $form_km->periodo            = $request->input('periodo');
        $form_km->data_periodo       = Carbon::createFromFormat('d/m/Y', $request->input('data'));
        $form_km->km                 = $request->input('km');
        $form_km->id_vendedor        = $id_vendedor;
        $form_km->imagem_comprovante = $path;
        $form_km->save();

        return redirect()->route('form');
    }

    public function createDespesas(Request $request)
    {   
        $request->validate([
            'tipo' => 'required',
            'valor' => 'required',
            'imagem_comprovante' => 'required|image',
        ]);
    
        $id_vendedor = Auth::id();

        $form_desp = new FormDespesas();

        $path = $request->file('imagem_comprovante')->store('images/Vendedores/Despesas', 'public');

        $form_desp->tipo_despesa       = $request->input('tipo');
        $form_desp->data_periodo       = Carbon::createFromFormat('d/m/Y', $request->input('data'));
        $form_desp->valor              = $request->input('valor');
        $form_desp->id_vendedor        = $id_vendedor;
        $form_desp->imagem_comprovante = $path;
        $form_desp->save();

        return redirect()->route('form');
    }
}
