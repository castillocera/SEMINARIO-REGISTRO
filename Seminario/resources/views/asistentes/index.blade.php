<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilos.css">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.css"> --}}
  <title>Registro</title>
</head>
  <header>
    <body>
      <p class="titulo">Seminario de Transferencia e Innovacion</p>
  </header>
  <div class="container">
    <input type="text" required="true" class="codigo" placeholder="Codigo">
    <form action="#">
   <p>
     <input type="checkbox" class="filled-in" id="filled-in-box"  />
     <label for="filled-in-box">Certificado</label>
   </p>

 </form>
    <button type="submit" class="btn" >Guadar Asistencia</button>
    <button type="submit" class="btn" >Registrar Nuevo</button>
    <div class="tabla">
      <table>
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Certificado</th>
            <th>Asistencia</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>12324561</td>
            <td>Eclair</td>
            <td>Si</td>
            <td>Si</td>
          </tr>
          <tr>
            <td>54455212</td>
            <td>Jellybean</td>
            <td>No</td>
            <td>No</td>
          </tr>
          <tr>
            <td>98889991</td>
            <td>Lollipop</td>
            <td>Si</td>
            <td>Si</td>
          </tr>
        </tbody>
      </table>
    </div>

    {!!Form::open(['route'=>'asistente.store', 'method'=>'POST'])!!}
    <div class="form-group">
  {!!Form::label('Dni:')!!}
  {!!Form::text('dni', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del Usuario'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}
  </div>
    <div class="form-group">
  {!!Form::label('Nombre:')!!}
  {!!Form::text('nombre', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del Usuario'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}
  </div>
  <div class="form-group">
{!!Form::label('Apellidos:')!!}
{!!Form::text('apellidos', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del Usuario'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}
</div>
<div class="form-group">
{!!Form::label('Insitucion:')!!}
{!!Form::text('institucion', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del Usuario'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}
</div>
<div class="form-group">
  {!!Form::label('Telefono:')!!}
  {!!Form::text('telefono', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Correo del Usuario'])!!}
</div>
<div class="form-group">
{!!Form::label('Correo:')!!}
{!!Form::text('correo', null,['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del Usuario'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}
</div>
<div class="form-group">
{!!Form::label('Certificado:')!!}
{{ Form::checkbox('certificado', 1, ['class' => 'field']) }}{{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA--}}

</div>


    {!! Form::submit('Registar!',['class'=>'btn btn-primary'])!!}


  {!!Form::close()!!}

  </div>





</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
<script>

$(function() {
  Painter();
});



</script>

</html>
