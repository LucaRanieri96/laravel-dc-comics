@extends('layouts.app')


@section('content')

<div class="container py-5 text-center">
    <img src="{{$comic->thumb}}" alt="">
    <h1>{{$comic->title}}</h1>
    <div><strong>Description:</strong>  {{$comic->description}}</div>
    <div><strong>Sale date:</strong>  {{$comic->sale_date}}</div>
    <div><strong>Type:</strong> {{$comic->type}}</div>
    <div><strong>Price:</strong>  {{$comic->price}}</div>
</div>


@endsection