@extends('templates.base')
@section('title', 'Crear Orden')
@section('header', 'Crear Orden')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="description">Fecha De Legalización:</label>
                        <input type="date" class="form-control"
                        id="legalization_date" name="legalization_date" required>
                    </div> 
                    <div class="col-lg-6 mb-4">
                        <label for="address">Dirección:</label>
                        <input type="text" class="form-control"
                        id="address" name="adress" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="city">Ciudad:</label>
                        <select name="city" id="city" class="form-control" required>
                            <option value="1">Seleccionar</option>
                            <option value="2">Tuluá</option>
                            <option value="3">Buga</option>
                            <option value="4">Calí</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="observation_id">Observación:</label>
                        <select name="observation_id" id="observation_id" class="form-control" required>
                            <option value="1">Seleccionar</option>
                            <option value="2">Perro Bravo</option>
                            <option value="3">No Hay Contador</option>
                            <option value="4">Innaccesible</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="causal_id">Causal:</label>
                        <select name="causal_id" id="causal_id" class="form-control" required>
                            <option value="1">Seleccionar</option>
                            <option value="2">Suspensión De Servicio</option>
                            <option value="3">Cambio De Contador</option>
                            <option value="4">Revisión</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block" >Cancelar</a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12 mb-4">
                  <div class="alert alert-warning" role="alert">
                    <i class="fa-solid fa-lightbulb"></i> Para Añadir Actividades a la Orden Primero Debe Crearla y Luego Dar Click En La Acción Editar.
                  </div>
                </div>
            </div>    
        </div>
    </div>
@endsection