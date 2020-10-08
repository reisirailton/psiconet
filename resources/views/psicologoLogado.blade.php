@extends('layouts.master')

@section('content')
<div class="container mt-5 pt-3">
    @if (empty($psicologo))
    <form method="" action="/concluirCadastroPsicologo" class="py-3">
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
                    <img src="{{url('img/psicologia-online.jpg')}}" class="img-fluid" id="img-perfil">
                </div>
                <div class="row user-left-part ml-0">
                    <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                        <div class="row ml-0">
                            <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                <img src="{{$psicologo->foto}}" class="rounded-circle">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                                @if(auth()->user()->type == 1)
                                <form id="editarCadastroPsicologo"
                                    action="/editarCadastroPsicologo/{{auth()->user()->id}}" method="GET">
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
                                        <h3>{{$user->name}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email:&nbsp;{{$user->email}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>CPF:&nbsp;{{$psicologo->cpf}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Telefone:&nbsp; {{$psicologo->telefone}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>CRP:&nbsp;{{$psicologo->crp}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Valor Sessão:&nbsp;{{$psicologo->valor_sessao}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Plano:&nbsp;{{$psicologo->planos->plano}} - {{"R$: " . $psicologo->planos->valor}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Descrição:&nbsp;{{$psicologo->descricao}}</label>
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

        <div class="my-4">
            <h3>Dias de Atendimento</h3>
        </div>
        <div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Segunda-feira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Terça-feira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Quarta-feira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Quinta-feira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Sexta-feira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Sábado
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Domingo
                </label>
            </div>
            <div class="row">
                <div class="col-md-1 d-flex justify-content-start mt-4">
                    <button type="submit" class="btn btn-primary btn-block" id="button-form">Salvar</button>
                </div>
            </div>
        </div>
</div>

<div class="container mt-4">
    <div class="my-4">
        @if($histPsicologos->isEmpty())

            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Data da consulta</th>
                            <th scope="col">Valor da consulta</th>
                            <th scope="col">Cliente atendido</th>
                        </tr>
                    </thead>
                </table>
                <header class="col-12">
                    <h3 class="text-center">Não há histórico de consultas</h3>
                </header>
            </div>
</section>
        @else
    </div>
    <div class="row">
        <h3 class="m-auto pb-3">Histórico de consultas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Data da consulta</th>
                    <th scope="col">Valor da consulta</th>
                    <th scope="col">Cliente atendido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histPsicologos as $histPsicologo)
                <tr>
                    {{-- <th >1</th> --}}
                    <td scope="row">{{ date('d-m-Y'), strtotime($histPsicologo->data_sessao) }}</td>
                    <td>{{$histPsicologo->valor_consulta}}</</td>
                    <td>{{$histPsicologo->cliente->user->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endif
</section><!-- team section end -->

@endsection
