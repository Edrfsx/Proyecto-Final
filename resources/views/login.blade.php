@extends('plantilla')
@section('barra')
    Prueba
@endsection

@section('content')

    <div class="col-lg-12 container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('images/fondo.jpg') }}" class="img-fluid" style="height: 90vh; object-fit: cover;">
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="row ">
                    <form>
                        <div class="" style="margin-top: 20vh;">
                            <h1>
                                Inicio de sesión
                            </h1>
                        </div>
                        <hr style="width: 60%; margin-left: 1em;">
                        <div class="row">
                            <label>
                                Nombre de usuario:
                            </label>
                            <input style="margin-left: 1em;" id="usuario" name="usuario">
                        </div>
                        <div class="row" style="margin-top: 1em;">
                            <label>
                                Contraseña:
                            </label>
                            <input style="margin-left: 1em;" id="contraseña" name="contraseña">
                        </div>
                        <div style="margin-top: 2em;">
                            <a class="btn btn-primary">Boton</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection