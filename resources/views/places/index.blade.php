@extends('layouts.app')
@section('content')
    <div class="image">
        <img src="https://cdn.discordapp.com/attachments/1022926468331864135/1100238256257368165/machu-picchu.png" class="img-fluid" alt="...">
        <div class="container-small">
            <p class="h2">Lugares Turísticos</p>
        </div>
    </div>
@endsection

@section('paginator')
    <div class="container p-3">
        @foreach ($places as $place)
            <div class="card d-inline-flex p-2" style="width: 18rem; ">


                <img src="{{$place->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$place->name}}</h5>
                    <p class="card-text">{{$place->ubication}}</p>
                    <a href="{{route('show_info', $place->id)}}" class="btn btn-primary">Más información</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container p-3">
        {!! $places->links() !!}
    </div>
@endsection
