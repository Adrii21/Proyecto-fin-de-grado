@extends('layouts.app')

@section('content')
<div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1 class="text-center">Menú</h1><br><br>

            <div class="card-deck">

                <div class="card bg-info">
                    <a href="{{ route('form.index') }}" class="text-white">
                    <img class="card-img-top" src="https://media.istockphoto.com/photos/payphone-picture-id181067028?k=6&m=181067028&s=612x612&w=0&h=WHit_TjcjC9bHcazEvRaVnGae8Pi-IoWYeo-AlY2WcA=" alt="Imagen teléfono">
                    <div class="card-body">
                        <h5 class="card-title">Establece una nueva llamada</h5>
                        <p class="card-text">Introduce un nuevo registro sobre una llamada sin contestar</p>
                    </div>
                    </a>
                </div>

                @can('admin.index')
                <div class="card bg-secondary">
                    <a href="{{ route('admin.index') }}" class="text-white">
                        <img class="card-img-top" src="https://cdn.icon-icons.com/icons2/112/PNG/512/control_panel_18862.png" alt="Imagen dashboard">
                        <div class="card-body">
                            <h5 class="card-title">Panel de control</h5>
                            <p class="card-text">Administración de todo el registro de llamadas</p>
                        </div>
                    </a>
                </div>
                @endcan

                <div class="card bg-primary">
                    <a href="{{ route('user.index') }}" class="text-white">
                        <img class="card-img-top" src="https://media.istockphoto.com/photos/black-handset-hanging-in-a-red-telephone-box-picture-id544481340?k=6&m=544481340&s=612x612&w=0&h=PDfJ05qBBpGrQhL8t-snyS6eIQNg4XSgP_4BF3CDqUU=" alt="Imagen persona con teléfono">
                        <div class="card-body">
                            <h5 class="card-title">Mis llamadas</h5>
                            <p class="card-text">Aquí se pueden ver, editar y eliminar todos tus registros realizados</p>
                        </div>
                    </a>
                </div>

            </div>



        </div>
    </div>
</div>
@endsection
