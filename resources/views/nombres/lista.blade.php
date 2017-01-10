@extends('layout')

@section('content')
    <h2> Usuarios</h2>
    <p>
        <a href="{{url('nombres/crear')}}">crear nombre</a>
    </p>
    <ul class="list-group">
        @foreach ($nombres as $nombre)
        <li class="list-group-item">
             <label class="label label-info"> {{$nombre->categoria->nombre_c }}</label>
            {{$nombre->nombre }}
        </li>
        @endforeach
    </ul>
    {!! $nombres->render() !!}
    <!--csrf_fields() sirve para proteger los datos que enviamos-->
    <!--
    <form method="post">
        <textarea></textarea>
        <button type="submit">crear nombre</button>

    </form>
    -->
@endsection