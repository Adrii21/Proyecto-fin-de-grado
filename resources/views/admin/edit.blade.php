@extends('layouts.app')

@section('content')
    <div class="container"><br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">{{ __('Formulario') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.update, $call') }}">
                            {{ method_field('PUT') }}

                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="from_name">Nombre:</label>
                                <input type="text" name="from_name" placeholder="Tu nombre aquí" value="{{ old('from_name')}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="to_name">Destinatario:</label>
                                <input type="text" name="to_name" placeholder="Destinatario aquí" value="{{ old('to_name') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date">Fecha:    (Click)</label>
                                <input type="date" name="date" id="date" placeholder="Fecha" value="{{ today()}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="time">Hora:</label>
                                <input type="time" name="time" id="time" placeholder="Hora" value="{{ now() }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="asunto">Asunto:</label>
                                <textarea name="asunto" cols="10" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="contact">Persona de contacto:</label>
                                <input type="text" name="contact" placeholder="Nombre aquí" value="{{ old('contact') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tlf">TLF de contacto:</label>
                                <input type="text" name="tlf" placeholder="Teléfono" value="{{ old('tlf')  }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tlf2">Otro tlf de contacto:</label>
                                <input type="text" name="tlf2" placeholder="Teléfono" value="{{ old('tlf2') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mail">Correo electrónico:</label>
                                <input type="email" name="mail" placeholder="Correo" value="{{ old('mail') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mail2">Otro correo electrónico:</label>
                                <input type="email" name="mail2" placeholder="Otro Correo" value="{{ old('mail2') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="observaciones">Observaciones:</label>
                                <textarea name="observaciones" cols="10" rows="3" class="form-control"></textarea>
                            </div>


                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-success">Confirmar</button>
                                <a href="{{ route('home') }}" class="btn btn-outline-light">Regresar</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes();
        document.getElementById('time').value = time;

        var date = new Date();
        var currentDate = date.toISOString().substring(0,10);
        document.getElementById('date').value = currentDate;


    </script>
@endsection


