@extends('layouts.app')

@section('content')
    <div class="container"><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">{{ __('Datos del usuario') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Nombre: {{ $user->name }}</h3>
                            <h3>Correo: {{ $user->email }}</h3>
                            <h3>Rol: {{ $user->role }}</h3>

                            <div class="form-group mt-4">
                                <a href="{{ route('home') }}" class="btn btn-info">Regresar</a>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
