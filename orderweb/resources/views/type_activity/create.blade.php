@extends('templates.base')
@section('title', 'Crear Tipo de Actividad')
@section('header', 'Crear Tipo de Actividad')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control"
                        id="description" name="description" required>
                    </div> 
                </div>
                <hr>
                <div class="col-lg12 mb-4">
                    <label for="comment">Comentario Sobre La Actividad:</label>
                    <input type="text" class="form-control" id="comment" name="comment" required>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('type_activity.index') }}" class="btn btn-secondary btn-block" >Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection