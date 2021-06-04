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

                        <h4>Nombre: </h4>
                        <p>{{ $form->from_name}}</p>

                        <h4>Destinatario: </h4>
                        <p> {{$form->from_name}}</p>

                        <h4>Fecha y hora: </h4>
                        <p>{{$form->date}} {{ $form->time }} </p>

                        <h4>Contacto:</h4>
                        <p>{{$form->contact}}</p>

                        <h4>Asunto: </h4>
                        <p> {{$form->asunto}}</p>

                        <h4>Teléfono(s):</h4>
                        <p>{{$form->tlf}} {{$form->tlf2}}</p>

                        <h4>Correo(s):</h4>
                        <p>{{$form->mail}} {{$form->mail2}}</p>

                        <h4>Observaciones:</h4>
                        <p>{{$form->observaciones}}</p>


                            <a href="{{ route('home') }}" class="align-self-end btn btn-outline-light">Regresar al menu</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
