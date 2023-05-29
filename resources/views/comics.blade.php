@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Comics</h1>
        <a href="{{route('comics.create')}}">
        <i>New Comic</i></a>
    </div>
    <div class="row">
        @forelse ($comics as $comic)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">Description: {{$comic->description}}</p>
                    <p>Price{{$comic->price}}</p>
                    <p>Sale date: {{$comic->sale_date}}</p>
                    <p>Genre: {{$comic->type}}</p>
                </div>
            </div>
        </div>
        @empty
        
        @endforelse
    </div>
</div>



@endsection