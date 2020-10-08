<?php

namespace App\Http\Controllers;
use App\Psicologo;
use App\HistPsicologo;
use App\Cliente;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function psicologo($id){
        $psicologo = Psicologo::find($id);
      
        return view('psicologo', compact('psicologo'));
    }
    public function consulta(Request $request, $id){
     
        $request->validate([
            "data"=>"required",
            "valor_consulta"=>"required",
            "psicologo_id"=>"required"
        ]);
        //  $cliente_id  = Cliente::where('id_user', $id)->first();
        
        // $cliente_id  = Cliente::select('id')->where($id, '=', 'id_user')->get();
        $cliente_id = Cliente::where('id_user', $id)->first();

        // dd($cliente_id->id);
        $histPsicologo = HistPsicologo::create([
            "data_sessao"=> $request->input(['data']),
            "valor_consulta"=> $request->input('valor_consulta'),
            "psicologo_id"=>$request->input('psicologo_id'),
            "cliente_id"=> $cliente_id->id
        ]);

        $histPsicologo->save();
       

        if ($histPsicologo){
            return redirect('/clienteLogado')->with('success', 'Agendado com sucesso!');
        }else{
            return redirect()->back()->with('error', 'Falha ao inserir');
        }
    }
}
