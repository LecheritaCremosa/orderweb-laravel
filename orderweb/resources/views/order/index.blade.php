@extends('templates.base')
@section('title', 'Listado de Actividades')
@section('header', 'Listado de Actividades')
@section('content')
   @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('order.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha De Legalización</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Observación</th>
                        <th>Causal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024/01/31</td>
                        <td>Tres Esquinas</td>
                        <td>Tuluá</td>
                        <td>No Hay Contador</td>
                        <td>Suspensión Del Servicio</td>
                        <td>
                            <a href="#" title="editar" class="btn btn-info btn-circle-btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#table_data').DataTable();
        });

        function remove()
        {
            if(confirm("¿Está Seguro De Eliminar El Registro?"))
                return true;
            else
                return false;
        }
    </script>

@endsection