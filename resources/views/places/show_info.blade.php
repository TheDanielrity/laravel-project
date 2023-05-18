@extends('layouts.app')
@section('content')
    <div class="container-place">
        <img src="{{$place->img}}" class="rounded mx-auto d-block w-50 p-3" alt="...">
        <div class="place-info">
            <h1>{{$place->name}}</h1>
            <p class="text-center">{{$place->description}}</p>
            <p class="h3 text-center">{{$place->ubication}}, Perú</p>
            <button>Reservar</button>
        </div>
    </div>
@endsection
