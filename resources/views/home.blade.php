@extends('layouts.app')

@section('content')
<div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark border-info mb-3">
                <div class="card-header border-info mb-3 text-center">{{ __('Menu') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class="text-white btn btn-primary" href="{{ route('form.index') }}">Establecer hora de la llamada</a><br><br>

                            <a class="text-white btn btn-success" href="{{ route('admin.index') }}">Panel de control</a><br><br>

                        <a class="text-white btn btn-secondary" href="{{ route('user.show') }}">Mi perfil</a><br><br>
                        <a class="text-white btn btn-info" href="{{ route('user.index') }}">Mis llamadas</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
