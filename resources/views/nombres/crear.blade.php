@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>crear nombres</h2>
            @include('partials/errors')
            <form method="POST" action="{{url('nombres')}}" class="form">
                {!! csrf_field() !!}
                <div class="form-group">
                    <textarea name="nombre" class="form-control" placeholder="Escribir nombre">{{old('nombre')}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">crear nombre</button>
            </form>
        </div>
    </div>
@endsection