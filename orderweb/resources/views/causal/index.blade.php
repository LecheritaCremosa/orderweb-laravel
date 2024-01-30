@extends('templates.base')
@section('title', 'Listado de Causales')
@section('headers', 'Listado de Causales')
@section('content')
   @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('causal.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Causal De Prueba</td>
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