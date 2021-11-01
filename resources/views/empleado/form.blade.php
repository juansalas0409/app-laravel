<label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
    <br>

    <label for="Primer Apellido"> Primer Apellido  </label>
    <input type="text" name="Primer Apellido" value="{{ $empleado->Primer_Apellido }}" id="Primer Apellido">
    <br>

    <label for="Segundo Apellido"> Segundo Apellido </label>
    <input type="text" name="Segundo Apellido" value="{{ $empleado->Segundo_Apellido }}" id="Segundo Apellido">
    <br>

    <label for="Correo"> Correo </label>
    <input type="email" name="Correo" value="{{ $empleado->Correo }}" id="Correo">
    <br>

    <label for="Foto"> Foto </label>
    {{ $empleado->Foto }}
    <input type="file" name="Foto" value="" id="Foto">
    <br>

    <input type="submit" value="Guardar Datos">