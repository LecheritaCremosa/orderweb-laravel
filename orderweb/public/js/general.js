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