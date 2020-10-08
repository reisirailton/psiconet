@extends('layouts.master')

@section('content')

<div class="container mt-5">

    @if (empty($clientes))
    <form method="" action="/concluirCadastroCliente" class="py-3">
        <div class="text-center py-3 pb-5 my-3">
            <h4 class="my-1">Para visualizar perfil é preciso finalizar o cadastro</h4>
            <p class="my-1">Clique no botão abaixo e finalize seu cadastro</p>
            <div class="col-md-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-block">Concluir cadastro</button>
            </div>
        </div>
    </form>
    @else
    <section class="team-area ptb-90" id="team">
        <div class="success">
            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div class="container main-secction pr-0">
            <div class="row ml-0">
                <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                    <img src="{{url('img/psicologia-online.jpg')}}">
                </div>
                <div class="row user-left-part ml-0">
                    <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                        <div class="row ml-0">
                            <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                <img src="{{url($clientes->foto)}}" class="rounded-circle">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                                @if(auth()->user()->type == 0)
                                <form id="editarCadastroCliente"
                                    action="/editarCadastroCliente/{{auth()->user()->id}}" method="GET">
                                    @csrf{{ method_field('GET') }}
                                    <button id="btn-contact" class="btn btn-success btn-block mt-3">Editar
                                        Perfil</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                        <div class="row profile-right-section-row">
                            <div class="col-md-12 profile-header">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                        <h5>{{auth()->user()->name}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email:&nbsp;{{auth()->user()->email}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>CPF:&nbsp;{{$clientes->cpf}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Telefone:&nbsp; {{$clientes->telefone}}</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<div class="container mt-4">
    <div class="my-4">
        @if($histClientes->isEmpty())

            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Data da consulta</th>
                            <th scope="col">Valor da consulta</th>
                            <th scope="col">Psicologo</th>
                        </tr>
                    </thead>
                </table>
                <header class="col-12">
                    <h3 class="text-center">Não há histórico de consultas</h3>
                </header>
            </div>
        @else
        <div class="row">
            <h3 class="m-auto pb-3">Histórico de consultas</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Data da consulta</th>
                        <th scope="col">Valor da consulta</th>
                        <th scope="col">Psicologo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histClientes as $histCliente)
                    <tr>
                        {{-- <th >1</th> --}}
                        <td scope="row">{{ date('d-m-Y'), strtotime($histCliente->data_sessao)}}</td>
                        <td>{{$histCliente->valor_consulta}}</</td>
                        <td>{{$histCliente->Psicologo->user->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>


@endsection
