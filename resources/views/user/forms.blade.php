@extends('layouts.app')

@section('content')
    <div class="container"><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div><h4>{{ __('Mis llamadas') }}</h4></div>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($calls->isNotEmpty())
                        <div class="table-responsive-lg">
                            <table class="table table-sm">
                                <th>
                                    <tr class="text-light">
                                        <th>Fecha y hora</th>
                                        <th>Receptor</th>
                                        <th>Destinatario</th>
                                        <th>Asunto</th>
                                        <th>Persona de contacto</th>
                                        <th>Tlf1</th>
                                        <th>Tlf2</th>
                                        <th>Mail1</th>
                                        <th>Mail2</th>
                                        <th>Observaciones</th>
                                        <th>Fecha añadida</th>
                                        <th class="text-right">Acciones</th>
                                    </tr>
                                </th>
                                <tbody class="text-light">
                                @each('user._row', $calls, 'call')
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3>Nada pendiente</h3>
                    @endif

                    {{ $calls->links() }}

                    <a href="{{ route('home') }}" class="align-self-end btn btn-outline-light">Regresar al menu</a>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
