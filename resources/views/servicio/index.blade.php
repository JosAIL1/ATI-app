@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

@section('contenido')
<a href="servicios/create" class="btn btn-primary">Crear</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Dependencia</th>  
            <th scope="col">Area</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Fecha</th>
            <th scope="col">Marca</th>
            <th scope="col">Serie</th>
            <th scope="col">Factura</th>
            <th scope="col">Falla</th>
            <th scope="col">Componentes</th>
            <th scope="col">Acciones_rea</th>
            <th scope="col">Resultados</th>
            <th scope="col" type="file">Evidencias</th>            
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicios)
        <tr>
            <td>{{$servicios->id}} </td>
            <td>{{$servicios->nombre}} </td>
            <td>{{$servicios->apellido}} </td>
            <td>{{$servicios->correo}} </td>
            <td>{{$servicios->dependencia}} </td>
            <td>{{$servicios->area}} </td>
            <td>{{$servicios->domicilio}} </td>
            <td>{{$servicios->telefono}} </td>
            <td>{{$servicios->fecha}} </td>
            <td>{{$servicios->marca}} </td>
            <td>{{$servicios->serie}} </td>
            <td>{{$servicios->factura}} </td>
            <td>{{$servicios->falla}} </td>
            <td>{{$servicios->componentes}} </td>
            <td>{{$servicios->acciones}} </td>
            <td>{{$servicios->resultado}} </td>
            <td>{{$servicios->evidencias}} </td>
            <td>{{$servicios->status}} </td>
      
            <td>
                <form action="{{ route ('servicios.destroy', $servicios->id)}}" method="POST">
                <a href="/servicios/{{$servicios->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')

                <button  type="submit" class="btn btn-danger">Borrar</button>
                
                </form>
            </td>
            

        </tr>
        @endforeach

    </tbody>
    

    

    <script src="{{ asset('js/script.js') }}"></script>
</table>
@endsection