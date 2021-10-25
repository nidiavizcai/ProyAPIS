 <label for="Nombre"> Nombre </label>
 <input id="Nombre" type="text" name="Nombre" value="{{ $empleado->Nombre }}">
 <br>


 <label for="PrimerApellido"> Primer Apellido </label>
 <input id="PrimerApellido" type="text" name="PrimerApellido" value="{{ $empleado->PrimerApellido }}">
 <br>
 <label for="SegundoApellido"> Segundo Apellido </label>
 <input id="SegundoApellido" type="text" name="SegundoApellido" value="{{ $empleado->SegundoApellido }}">
 <br>
 <label for="Correo"> Correo </label>
 <input id="Correo" type="text" name="Correo" value="{{ $empleado->Correo }}">
 <br>
 <label for="Foto"> Foto </label>
 <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
 <input id="Foto" type="file" name="Foto" value="">
 <br>
 <input type="submit" value="Enviar">
 <br>
