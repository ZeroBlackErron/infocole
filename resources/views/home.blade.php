@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información personal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm text-center">
                            <img src="{{ asset('images/avatar_pd.png') }}" alt="" style="width: 150px;height: 150px;border-radius: 50%;">
                        </div>
                        <div class="col-sm">
                            <div>
                                <span class="h5">Nombre: </span><br/>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </div><br/>
                            <div>
                                <span class="h5">Apellido: </span><br/>
                                {{ Auth::user()->surname }} <span class="caret"></span>
                            </div><br/>
                            <div>
                                <span class="h5">Correo: </span><br/>
                                {{ Auth::user()->email }} <span class="caret"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
