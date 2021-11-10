<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">
</br>

<label for="PrimerApellido">PrimerApellido</label>
<input type="text" name="PrimerApellido" value="{{$empleado->PrimerApellido}}" id="PrimerApellido">
</br>

<label for="SegundoApellido">SegundoApellido</label>
<input type="text" name="SegundoApellido" value="{{$empleado->SegundoApellido}}" id="SegundoApellido">
</br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{$empleado->Correo}}" id="Correo">
</br>

<label for="Foto">Foto</label>
{{$empleado->Foto}}
<input type="file" name="Foto" value="" id="Foto">
</br>

<input type="submit" value="Guardar datos">
</br>