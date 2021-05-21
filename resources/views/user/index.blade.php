@extends('layouts.app')

@section('content')
    <div class="container"><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-info mb-3 bg-dark">
                    <div class="card-header border-info text-center">{{ __('Mis datos') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>Usuario: </h4><br>
                            <p>{{ Auth::user()->name}} {{ Auth::user()->surname}}</p>

                        <h4>Correo: </h4><br>
                        <p> {{ Auth::user()->email }}</p>

                        <h4>Fecha de creación:</h4>
                        <p>{{ Auth::user()->created_at}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
