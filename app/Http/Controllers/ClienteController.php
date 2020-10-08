<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Psicologo;
use App\User;
use App\HistPsicologo;

class ClienteController extends Controller
{
    public function cadastroCliente(){

        return view('cadastroCliente');
    }

    // public function clienteLogado(){

    //     if(auth()->user()){
    //         $cliente = Cliente::find(auth()->user()->id);
    //         return view('/psicologoLogado', compact('cliente', $cliente, 'psicologo', $psicologo));
    //     }
    // }

    public function salvandoCliente(Request $request){
        $request->validate([
            "foto" => "required",
            "usuario" => "required",
            "cpf" => "required|min:11",
            "telefone" => "required|min:11",
            "id_user" => "required"
        ],[
            "usuario.required"=>'O campo usuário é obrigatório',
            "cpf.required"=>'O campo CPF é obrigatório',
            "telefone.required"=>'O campo telefone é obrigatório',
            "id_user.required"=>'O campo email é obrigatório'

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

        $clientes = Cliente::create([
            "usuario" => $request->input("usuario"),
            "cpf" => $request->input("cpf"),
            "telefone" => $request->input("telefone"),
            "id_user" => $request->input("id_user"),
            "foto" => $caminhoRelativo
        ]);

        $clientes->save();

        return redirect('/clienteLogado');
    }

    public function editarCadastroCliente($id){
        $cliente = Cliente::where('id_user', $id)->first();
        return view('editarCadastroCliente', compact('cliente'));
    }

    public function concluirCadastroCliente() {
        return view('concluirCadastroCliente');
    }

    public function alterarCadastroCliente(Request $request, $id){
        $cliente = Cliente::find($id);
        $request->validate([
            "usuario" => "required",
            "cpf" => "required|min:11",
            "telefone" => "required|min:11",
        ]);

        if($request->hasFile('foto')){

            $arquivo = $request->file('foto');

            $nomePasta = "uploads";

            $arquivo->storePublicly($nomePasta);

            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

            $nomeArquivo = $arquivo->getClientOriginalName();

            $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

            $arquivo->move($caminhoAbsoluto, $nomeArquivo);

            $cliente->foto = $caminhoRelativo;
        }
            $cliente->usuario = $request->input("usuario");
            $cliente->cpf = $request->input("cpf");
            $cliente->telefone = $request->input("telefone");

        $cliente->save();

        $user = User::find(auth()->user()->id);

        if($_REQUEST){
            $user->name = $request->input('nome');
            $user->email = $request->input('email');
        }

        $user->save();
        // $psicologos = Psicologo::all();
        // $psicologos = Psicologo::orderBy('id', 'ASC')->get();
        // dd($psicologos);
        return redirect('/clienteLogado');

    }

    public function removendoCliente($id){

        $cliente = Cliente::where('id_user', $id)->first();
        $user = User::find($id);

        $deleteC = $cliente->delete();
        $deleteU =  $user->delete();

        if($deleteC && $deleteU){
            return redirect('/');
        }else{
            return redirect()->back()->with('error', 'Falha ao excluir');
        }

    }
    public function clienteLogado(){
        $psicologos = Psicologo::all();
        return view('clienteLogado', compact('psicologos'));
    }

    public function perfilCliente($id){
        $clientes = Cliente::where('id_user', $id)->first();
        $histClientes = HistPsicologo::where('cliente_id', $clientes->id)->get();
        return view('perfilCliente', compact('clientes', 'histClientes'));
    }

}
