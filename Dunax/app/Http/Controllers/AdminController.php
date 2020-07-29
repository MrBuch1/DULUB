<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Admin;
use App\Formdespesas;
use App\Formkm;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class AdminController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showForms($id)
    {   
        $vendedor = User::findOrFail($id);

        return view('admins.forms', compact('vendedor'));
    }

    public function showKm(Request $request, $id)
    {   
        $vendedor = User::findOrFail($id);

        $date_1 = $request->input('data_inicial_km');
        $date_2 = $request->input('data_final_km');
        
        $data_i = Carbon::createFromFormat('d/m/Y', $date_1)->toDateString();
        $data_f = Carbon::createFromFormat('d/m/Y', $date_2)->toDateString();
        
        $period = CarbonPeriod::create($data_i, $data_f);

        foreach($period as $p) {
            //echo(Carbon::parse($p->toDateString())->format('d/m/Y'));
            $datas = Formkm::where('data_periodo', $p)->first('data_periodo');

            $form_km = DB::table('formkms')
                        ->where('id_vendedor', $vendedor->id)
                        ->where('data_periodo', $p)
                        ->get();
        }

        return view('admins.form_km', compact('vendedor', 'form_km', 'data_i', 'data_f', 'period'));
    }

    public function showDespesas(Request $request, $id)
    {   
        $vendedor = User::findOrFail($id);

        $date_1 = $request->input('data_inicial_desp');
        $date_2 = $request->input('data_final_desp');
        
        $data_i = Carbon::createFromFormat('d/m/Y', $date_1)->toDateString();
        $data_f = Carbon::createFromFormat('d/m/Y', $date_2)->toDateString();
        
        $period = CarbonPeriod::create($data_i, $data_f);

        foreach($period as $p) {
            //echo(Carbon::parse($p->toDateString())->format('d/m/Y'));
            $datas = Formdespesas::where('data_periodo', $p)->first('data_periodo');

            $form_desp = DB::table('formdespesas')
                        ->where('id_vendedor', $vendedor->id)
                        ->where('data_periodo', $p)
                        ->get();
        }

        return view('admins.form_despesa', compact('vendedor', 'form_desp', 'data_i', 'data_f', 'period'));
    }
}
