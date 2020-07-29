<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Formdespesas;
use App\Formkm;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id = Auth::id();
        $user = Auth::user();     

        if (Auth::check()) {

            /*$vendedores = DB::table('users')
                ->where('coordenador', $user->name)
                ->where('id', '>=', 9)
                ->get();

            if ($id >= 9 && $id <= 32){
                return redirect()->route('form');
            }
            else if ($id >= 33) {
                return redirect()->route('documentos_index');
            }
            else if ($id > 1 && $id < 9) {
                return view('admins.acessar_forms', compact('vendedores', 'user'));
            }*/
            
            if ($id > 1){
                return redirect()->route('documentos_index');
            }
        }

        $noticia = DB::table('noticias')->latest()->first();

        return view('index', compact('noticia'));        
    }
}
