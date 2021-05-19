@extends('layouts.app')

@section('content')
<div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class="text-white btn btn-primary" href="{{ route('form.index') }}">Establecer hora de la llamada</a>
                        <a class="text-white btn btn-success" href="{{ route('admin') }}">Administrador</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
