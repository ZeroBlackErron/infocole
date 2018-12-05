@extends('layouts.app')

@section('content')}
<div class="container">
    <div class="card">
        <div class="card-header">Búsqueda por nombre</div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group row">
                    <label for="name" class="col-sm col-form-label text-md-right">{{ __('Colegio:') }}</label>

                    <div class="col-sm">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>
                    </div>

                    <div class="col-sm">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Buscar') }}
                        </button>
                        <a class="btn btn-success" href="{{ route('schools.create') }}">Nuevo colegio</a>
                    </div>
                </div>
            </form>
        </div>
    </div><br/>
    <div class="row">
        @foreach ($schools as $school)
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ $school->photo }}">
              <div class="card-body">
                <h5 class="card-title">{{ $school->name }}</h5>
                <p class="card-text">{{ $school->description }}</p>
                <a href="{{ route('schools.show',$school->id) }}" class="btn btn-primary">Ver más</a>
              </div>
            </div><br/>
        @endforeach
    </div>
</div>

@endsection