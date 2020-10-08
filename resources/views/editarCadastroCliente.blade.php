@extends('layouts.master')

@section('content')

    <div class="container mt-5 pt-5">

        @if (empty($cliente))

        <form method=""  action="/concluirCadastroCliente" class="py-3">
            <div class="text-center py-3 pb-5 my-5">
                <h4 class="my-2">Para editar seu perfil é preciso finalizar o cadastro</h4>
                <p class="my-2">Clique no botão abaixo e finalize seu cadastro</p>
                <div class="col-md-12 d-flex justify-content-center my-2">
                    <button type="submit" class="btn btn-primary btn-block">Concluir cadastro</button>
                </div>
            </div>
        </form>

        @else
        <ul class="nav nav-tabs mt-2">
            <li class="active  list-cadastro w-100 text-center" id="list1">
                <a data-toggle="tab" href="#home" class="py-1  px-3 d-block w-100 h-100">Editar Perfil</a>
            </li>
        </ul>

        <form method="POST"  action="/editarCadastroCliente/{{$cliente->id}}" class="py-3 form-edit" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="tab-content pt-3">
                <div id="home">
                    <div class="row">
                        <div class="form-group w-100 d-flex flex-wrap align-items-center">
                            <div class="col-lg-12 pull-lg-12 text-center">
                                <img src="{{url($cliente->foto)}}" class="m-x-auto img-fluid rounded-circle" alt="avatar"  id="profile-img-tag" width="200px" />
                                <h6 class="m-t-2 py-3">Carregar foto de Perfil</h6>
                                <label class="custom-file w-50 py-2" {{ $errors->has('foto') ? ' has-error' : '' }} >
                                <input type="file" id="profile-img" name="foto" class="custom-file-input">
                                <span class="custom-file-control">Escolher arquivo</span>
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
                    <div class=" {{ $errors->has('usuario') ? ' has-error' : '' }}">
                        <p>Usuário</p>
                    <input class="form-control form-control-lg" type="text" id="usuario" name="usuario" value="{{$cliente->usuario}}">
                        <small class="text-danger">{{ $errors->first('usuario') }}</small>
                    </div>
                    <div class=" {{ $errors->has('cpf') ? ' has-error' : '' }}">
                        <p>CPF</p>
                        <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" value="{{$cliente->cpf}}">
                        <small class="text-danger">{{ $errors->first('cpf') }}</small>
                    </div>
                    <div class=" {{ $errors->has('telefone') ? ' has-error' : '' }}">
                        <p>Telefone</p>
                        <input class="form-control form-control-lg" type="text" id="telefone" name="telefone" value="{{$cliente->telefone}}">
                        <small class="text-danger">{{ $errors->first('telefone') }}</small>
                    </div>
                    <div class="row">
                            <div class="col-md-6 col-12 w-100 py-1">
                                <button onclick="event.preventDefault()" class="btn btn-primary bg-transparent border-danger text-danger w-100" data-toggle="modal"
                                data-target="#modal{{$cliente->id}}">
                                    Excluir Conta
                                </button>
                            </div>
                            <div class="col-md-6 col-12 py-1">
                                    <button type="submit" class="btn btn-primary bg-primary text-white w-100" id="button-form"  style="padding: .375rem .75rem; font-size: .9rem; line-height: 1.6;">
                                        Salvar Alterações
                                    </button>
                            </div>
                        </div>
                </div>
            </div>
        </form>
        @endif
    </div>
    <div class="modal fade" id="modal{{$cliente->id}}" tabindex="-1" role="dialog">
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
                            <form action="/removerCliente/{{(auth()->user()->id)}}" method="POST">
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

@endsection