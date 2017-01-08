@extends('layout')

@section('content')
    <h2> Usuarios</h2>
    <p>
        <a href="{{url('nombres/crear')}}">crear nombre</a>
    </p>
    <ul>
        @foreach ($nombres as $nombre)
        <li>
            {{ $nombre->nombre }}
        </li>
        @endforeach
    </ul>
    <!--csrf_fields() sirve para proteger los datos que enviamos-->
    <!--
    <form method="post">
        {!! csrf_field() !!}
        <textarea></textarea>
        <button type="submit">crear nombre</button>

    </form>
    -->
@endsection