@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

@section('contenido')


</h1>
<a href="clientes/create" class="btn btn-primary">Crear</a>



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
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $clientes)
        <tr>
            <td>{{$clientes->id}} </td>
            <td>{{$clientes->nombre}} </td>
            <td>{{$clientes->apellido}} </td>
            <td>{{$clientes->correo}} </td>
            <td>{{$clientes->dependencia}} </td>
            <td>{{$clientes->area}} </td>
            <td>{{$clientes->domicilio}} </td>
            <td>{{$clientes->telefono}} </td>
            <td>{{$clientes->fecha_registro}} </td>
            <td>{{$clientes->marca}} </td>
            <td>{{$clientes->serie}} </td>
            <td>{{$clientes->factura}} </td>
            <td>{{$clientes->falla}} </td>
      
            <td>
                <form action="{{ route ('clientes.destroy', $clientes->id)}}" method="POST">
                <a href="/clientes/{{$clientes->id}}/edit" class="btn btn-info">Editar</a>
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