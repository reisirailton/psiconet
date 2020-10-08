@extends('layouts.master')
@section('content')
<div class="container mt-5 py-5">
@if (empty($psicologo))
<form method="" action="/concluirCadastroPsicologo" class="py-3">
    <div class="text-center py-3 pb-5 my-3">
        <h4 class="my-1">Para editar seu perfil é preciso finalizar o cadastro</h4>
        <p class="my-1">Clique no botão abaixo e finalize seu cadastro</p>
        <div class="col-md-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-block">Concluir cadastro</button>
        </div>
    </div>
</form>

@else

<ul class="nav nav-tabs">
    <li class="active  list-cadastro w-100 text-center" id="list1"><a data-toggle="tab" href="#home"
            class="py-1  px-3 d-block w-100 h-100">Editar Perfil</a></li>
</ul>
<div class="tab-content pt-3">
    <form method="POST" id="editarCadastroPsicologo" action="/editarCadastroPsicologo/{{$psicologo->id}}"
        enctype="multipart/form-data">
        @csrf{{ method_field('PUT') }}
        <div id="home">
            <div class="row">
                <div class="form-group w-100 d-flex flex-wrap align-items-center">
                    <div class="col-lg-12 pull-lg-12 text-center">
                        <img src="{{url($psicologo->foto)}}" class="m-x-auto img-fluid rounded-circle" alt="avatar"
                            id="profile-img-tag" width="200px" />
                        <h6 class="m-t-2 py-3">Carregar foto de Perfil</h6>
                        <label class="custom-file w-50 py-2" {{ $errors->has('foto') ? ' has-error' : '' }}>
                            <input type="file" id="profile-img" name="foto" class="custom-file-input"
                                value="{{url($psicologo->foto)}}">
                            <span class="custom-file-control">Escolher arquivo</span>
                            <div>
                            </div>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <p>Nome</p>
                        <input class="form-control form-control-lg" type="text" id="input-nome" name="nome"
                            value="{{auth()->user()->name}}">
                    </div>
                </div>
            </div>
            <p>Email</p>
            <input class="form-control form-control-lg" type="email" id="input-email" name="email"
                value="{{auth()->user()->email}} ">
            <div class=" {{ $errors->has('email') ? ' has-error' : '' }}">
                <p>CPF</p>
                <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" id="cpf"
                    value="{{$psicologo->cpf}}">
                <small class="text-danger">{{ $errors->first('cpf') }}</small>
            </div>
            <div class=" {{ $errors->has('telefone') ? ' has-error' : '' }}">
                <p>Telefone</p>
                <input class="form-control form-control-lg" type="text" id="tefelfone" name="telefone"
                    value="{{$psicologo->telefone}}">
                <small class="text-danger">{{ $errors->first('telefone') }}</small>
            </div>
            <div class=" {{ $errors->has('crp') ? ' has-error' : '' }}">
                <p>Registro CRP</p>
                <input class="form-control form-control-lg" type="text" id="CRP" name="crp"
                    value="{{$psicologo->crp}}">
                <small class="text-danger">{{ $errors->first('crp') }}</small>
            </div>
            <div class=" {{ $errors->has('valor_sessao') ? ' has-error' : '' }}">
                <p>Valor Sessão</p>
                <input class="form-control form-control-lg" type="text" id="valor_sessao" name="valor_sessao"
                    value="{{$psicologo->valor_sessao}}">
                <small class="text-danger">{{ $errors->first('valor_sessao') }}</small>
            </div>
            <div class="">
                <p>Plano</p>
                <select name="plano"
                    class="form-control form-control-lg {{ $errors->has('plano') ? ' has-error' : '' }}">
                    {{-- <option name="plano" value="">{{$plano->plano}}</option> --}}
                    @foreach ($planos as $plano)
                    <option name="plano" value="{{ $plano->id }}">{{ $plano->plano }}</option>
                    @endforeach
                </select>
                <small class="text-danger">{{ $errors->first('plano') }}</small>
            </div>
            <div class="form-group {{ $errors->has('descricao') ? ' has-error' : '' }}">
                <label for="exampleFormControlTextarea1">Sobre</label>
                <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"
                    placeholder="Descrição Profissional" rows="3">{{$psicologo->descricao}}</textarea>
                <small class="text-danger">{{ $errors->first('descricao') }}</small>
            </div>
            
        </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 w-100 py-1">
                <button onclick="event.preventDefault()" class="btn btn-primary bg-transparent border-danger text-danger w-100" data-toggle="modal"
                data-target="#modal{{$psicologo->id}}">
                    Excluir Conta
                </button>
            </div>
            <div class="col-md-6 col-12 py-1">
                    <button type="submit" class="btn btn-primary bg-primary text-white w-100" id="form-button" style="padding: .375rem .75rem; font-size: .9rem; line-height: 1.6;">
                        Salvar Alterações
                    </button>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="modal{{$psicologo->id}}" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <div class="modal-title w-100 d-flex align-items-center justify-content-center">
                <img src="{{url('img/logo.png')}}" alt="">
                <h2>PSICONET</h2>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h4 class="text-center py-4">Deseja realmente excluir sua conta ?</h4>
            <div class="d-flex justify-content-between flex-column mx-3">
                <form action="/removerPsicologo/{{(auth()->user()->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="py-2 btn btn-danger bg-danger text-white w-100">Excluir</button>
                </form>
                <button type="button" class="btn btn-primary py-2" data-dismiss="modal">Cancelar</button>
            </div>
        </div>

        <div class="modal-footer d-flex align-items-center justify-content-center">
            <p class="">Copyright &copy; Psiconet 2019</p>
        </div>
    </div>
</div>
</div>
@endif
@endsection