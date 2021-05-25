@extends('layouts.app')

@section('content')
    <div class="container"><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-info mb-3 bg-dark">
                    <div class="card-header border-info text-center">{{ __('Datos de formulario actualizado') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>Nombre: </h4><br>
                        <p>{{ $form->from_name}}</p>

                        <h4>Destinatario: </h4><br>
                        <p> {{$form->from_name}}</p>

                        <h4> </h4>
                        <p>{{  }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
