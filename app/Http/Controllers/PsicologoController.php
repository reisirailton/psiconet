<?php

namespace App\Http\Controllers;

use App\HistPsicologo;
use Illuminate\Http\Request;
use App\Psicologo;
use App\Plano;
use App\User;
class PsicologoController extends Controller
{
    public function cadastroPsicologo(){
        $planos = Plano::orderBy('id', 'ASC')->get();

        return view('cadastroPsicologo', compact('planos', $planos));   
    }
        public function concluirCadastroPsicologo(){
            $user =auth()->user()->id;
            if(auth()->user()->type = 1){
                $planos = Plano::orderBy('id', 'ASC')->get();
                return view('concluirCadastroPsicologo', compact('planos', 'user'));
            }
        }

    public function psicologoLogado(){
        
        if(auth()->user()){
        $iduser = auth()->user()->id;

        $user = User::find(auth()->user()->id);
        $psicologo = Psicologo::where('id_user', $iduser)->first();
        $histPsicologos = HistPsicologo::where('psicologo_id', $psicologo->id)->get();
              
        return view('/psicologoLogado', compact('psicologo', 'user', 'histPsicologos'));
        }
       
    }

    public function salvandoPsicologo(Request $request){
        // dd($request);
       $request->validate([
            "foto"=> "required",
            "cpf" => "required",
            "telefone" => "required",
            "crp" => "required",
            'valor_sessao'=>'required',
            "plano" => "required",
            "descricao" =>"required",
            "user" =>"required"
        ]);
     
        $arquivo = $request->file('foto');

        if (empty($arquivo)) {
            abort(400, 'Nenhum arquivo foi enviado');
        }

        $nomePasta = "uploads";

        $arquivo->storePublicly($nomePasta);

        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

        $nomeArquivo = $arquivo->getClientOriginalName();

        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $psicologo = Psicologo::create([
            "foto"=> $caminhoRelativo,
            "cpf" => $request->input("cpf"),
            "telefone" => $request->input("telefone"),
            "cidade" => $request->input("cidade"),
            "crp" => $request->input("crp"),
            "valor_sessao"=> $request->input('valor_sessao'),
            "descricao"=> $request->input('descricao'),
            "id_plano"=> $request->input("plano"),
            "id_user"=> $request->input("user")
        ]);

        $psicologo->save();
        if ($psicologo){
            return redirect('/psicologoLogado')->with('success', 'Cadastro finalizado com sucesso!');
        }else{
            return redirect()->back()->with('error', 'Falha ao inserir');
        }
    }

    public function editarCadastroPsicologo($id){
        $planos = Plano::orderBy('id', 'ASC')->get();
        $psicologo = Psicologo::where('id_user', $id)->first();
        return view('editarCadastroPsicologo', compact('planos', 'psicologo'));
    }
    public function alterarCadastroPsicologo(Request $request, $id){
        $psicologo = Psicologo::find($id);
        
        $user = User::find(auth()->user()->id);
    
        $request->validate([
            "nome" => "required",
            "email" => "required",
            "cpf" => "required",
            "telefone" => "required",
            "crp" => "required",
            'valor_sessao'=>'required',
            "plano" => "required",
            "descricao" =>"required",
        ]);
        if($request->hasFile('foto')){

            $arquivo = $request->file('foto');
    
            $nomePasta = "uploads";
    
            $arquivo->storePublicly($nomePasta);
    
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
    
            $nomeArquivo = $arquivo->getClientOriginalName();
    
            $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";
    
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            
            $psicologo->foto = $caminhoRelativo;
        }


        
        
        $psicologo->cpf = $request->input('cpf');
        $psicologo->telefone= $request->input('telefone');
        $psicologo->crp= $request->input('crp');
        $psicologo->valor_sessao= $request->input('valor_sessao');
        $psicologo->id_plano= $request->input('plano');
        $psicologo->descricao= $request->input('descricao');

        $psicologo->save();
        if($_REQUEST){
            $user->name = $request->input('nome');
            $user->email = $request->input('email');
        }

        $psicologo->save();
        $user->save();   

        if($psicologo && $user){
            return redirect('/psicologoLogado')->with('success', 'Cadastro editado com sucesso!');
        }else{
            return back()->with('error', 'Falha ao editar cadastro');
        }

       

    }
    public function removendoPsicologo($id){

        $psicologo = Psicologo::where('id_user', $id)->first();
        $user = User::find($id);

        $deleteP = $psicologo->delete();
        $deleteU =  $user->delete();

        if($deleteP && $deleteU){
            return redirect('/')->with('sucess', 'Conta excluída com sucesso!');
        }else{
            return redirect()->back()->with('error', 'Falha ao excluir');
        }

    }
}
