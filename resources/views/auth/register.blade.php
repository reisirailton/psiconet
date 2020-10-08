@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 my-5 pt-5">
            <div class="card">
                <div class="card-header text-center custom-register">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group  d-flex justify-content-center align-items-center flex-column mb-0">
                            <label for="name" class="col-md-10 col-form-label text-md-left">{{ __('Nome') }}</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center flex-column mb-0">
                            <label for="email" class="col-md-10 col-form-label text-md-left">{{ __('Email') }}</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center flex-column mb-0">
                            <label for="password" class="col-md-10 col-form-label text-md-left">{{ __('Senha') }}</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center flex-column mb-0">
                            <label for="password-confirm" class="col-md-10 col-form-label text-md-left">{{ __('Confirme a senha') }}</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="form-group d-flex justify-content-around align-items-center mb-0">
                                <div class=" d-flex align-items-center">
                                    <label for="cliente"  class="px-2 py-3 ">{{ __('Cliente') }}</label>
                                    <input type="radio" class="@error('type') is-invalid @enderror"  required name="type" id="cliente" value="0">
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" d-flex align-items-center">
                                    <label for="psicologo" class="px-2 py-3">{{ __('Psicologo') }}</label>
                                    <input type="radio" class="@error('type') is-invalid @enderror"  required name="type" id="psicologo" value="1">
                                   
                                </div>
                               
                            </div>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                      
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary btn-auth px-5 py-2">
                                    {{ __('Confirmar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
