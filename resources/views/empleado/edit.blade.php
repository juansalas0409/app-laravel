<form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
@scrf
{{ method_field('PATCH') }}

    @include('empleado.form')
    
</form>