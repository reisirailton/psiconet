@extends('layouts.master')
@section('content')
    <div class="container pt-5 mt-5">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST"  action="/cadastroPsicologo" class="py-3" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}
            <ul class="nav nav-tabs">
                <li class="active  list-cadastro w-100 text-center" id="list1"><a data-toggle="tab" href="#home" class="py-1  px-3 d-block w-100 h-100">Concluir Cadastro</a></li>
            </ul>
            <div class="tab-content pt-3">
                <div id="home">
                    <div class="row">
                        <div class="form-group w-100 d-flex flex-wrap align-items-center">
                            <div class="col-lg-12 pull-lg-12 text-center">
                                <img src="//placehold.it/150" class="m-x-auto img-fluid rounded-circle" alt="avatar"  id="profile-img-tag" width="200px" />
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
                        value="{{auth()->user()->email}} " disabled>
                    <div class=" {{ $errors->has('cpf') ? ' has-error' : '' }}">
                        <p>CPF</p>
                        <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" value="">
                        <small class="text-danger">{{ $errors->first('cpf') }}</small>
                    </div>
                    <div class=" {{ $errors->has('telefone') ? ' has-error' : '' }}">
                    <p>Telefone</p>
                    <input class="form-control form-control-lg" type="text" id="tefelfone" name="telefone" value="">
                    <small class="text-danger">{{ $errors->first('telefone') }}</small>
                    </div>
                    {{-- <div class=" {{ $errors->has('cidade') ? ' has-error' : '' }}">
                    <p>Cidade</p>
                    <input class="form-control form-control-lg" type="text" id="cidade" name="cidade" value="">
                    <small class="text-danger">{{ $errors->first('cidade') }}</small>
                    </div> --}}
                    {{-- <div class="">
                        <p>Estado</p>
                        <select name="planos" class="form-control form-control-lg">
                            <option name="estado" value="{{ $errors->has('estado') ? ' has-error' : '' }}">Estado</option>
                            @foreach ($estados as $estado)
                            <option name="estado" value="{{ $estado->id }}">{{ $estado->title }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('estado') }}</small>
                    </div>                 --}}
                    <div class=" {{ $errors->has('crp') ? ' has-error' : '' }}">
                        <p>Registro CRP</p>
                        <input class="form-control form-control-lg" type="text" id="CRP" name="crp" value="">
                        <small class="text-danger">{{ $errors->first('crp') }}</small>
                    </div>
                    <div class=" {{ $errors->has('valor_sessao') ? ' has-error' : '' }}">
                        <p>Valor Sessão</p>
                        <input class="form-control form-control-lg" type="text" id="valor_sessao" name="valor_sessao"
                            value="">
                            <small class="text-danger">{{ $errors->first('valor_sessao') }}</small>
                    </div>
                    <div class="">
                        <p>Plano</p>
                        <select name="plano" class="form-control form-control-lg">
                            <option name="plano" value="{{ $errors->has('plano') ? ' has-error' : '' }}">Selecione um
                                Plano</option>
                            @foreach ($planos as $plano)
                                <option name="plano" value="{{ $plano->id }}">{{ $plano->plano }} - {{"R$: ". $plano->valor }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('plano') }}</small>
                    </div>
                    <div class="form-group {{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1">Sobre</label>
                            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"
                                placeholder="Descrição Profissional" rows="3"></textarea>
                            <small class="text-danger">{{ $errors->first('descricao') }}</small>
                        </div>
                        <div class="">
                                <input type="hidden"  value="{{(auth()->user()->id)}}" name="user" style="display: none;">
                            </div>
                    <div class="row">
                            <div class="col-md-12 d-flex justify-content-end mt-0">
                                <button type="submit" class="btn btn-primary btn-block" id="button-form"><a href="#menu1"></a>Concluir</button>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
    </div>

@endsection