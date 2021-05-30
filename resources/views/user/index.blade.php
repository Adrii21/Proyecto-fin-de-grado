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

                        <h3>Usuario: </h3>
                            <h4 class="text-right">{{ Auth::user()->name}} {{ Auth::user()->surname}}</h4><br>

                        <h3>Correo: </h3>
                        <h4 class="text-right"> {{ Auth::user()->email }}</h4><br>

                        <h3>Fecha de creación:</h3>
                        <h4 class="text-right"> {{ Auth::user()->created_at}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
