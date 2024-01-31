@extends('templates.base')
@section('title', 'Listado de Técnicos')
@section('header', 'Listado de Técnicos')
@section('content')
   @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('technician.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>988998</td>
                        <td>Travieso</td>
                        <td>REPARACIÓN</td>
                        <td>1234567890</td>
                        <td>
                            <a href="{{ route('technician.create') }}" title="editar" class="btn btn-info btn-circle-btn-sm">
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