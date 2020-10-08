@extends('layouts.master')

@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5 py-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
