@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <span class="h2 font-weight-bold">{{ $school->name }}</span>
        </div>
        <div class="float-left">
            <a class="btn btn-primary" href="{{ route('schools.index') }}">Volver</a>
        </div>
    </div><br/>
    <div class="row">
        <div class="col-sm">
            <img src="{{ $school->photo }}" style="width: 100%; height: 250px;border-radius: 5px;" class="shadow">
        </div>
        <div class="col-sm text-center">
            <span class="h5 font-weight-bold">Descripción: </span>
            <p>{{ $school->description }}</p>
            <span class="h5 font-weight-bold">Tipo: </span>
            <p>{{ $school->type }}</p>
            <span class="h5 font-weight-bold">Dirección: </span>
            <p>{{ $school->address }}</p>
        </div>
    </div><br/>
    <div class="row">
        <iframe src="{{ $school->url }}" height= "400px" frameborder="0" style="border:0" allowfullscreen class="w-100"></iframe>
    </div>
</div>
@endsection