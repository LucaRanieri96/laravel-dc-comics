@extends('layouts.app')


@section('content')
    <div id="banner"></div>
    <div id="blue-bg-main">
        <div class="container">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
    </div>

    <div>
        <div class="container py-5">
            <h2>{{ $comic->title }}</h2>
            <div class="pt-1"><strong>Type:</strong> {{ $comic->type }}</div>
            <div class="pt-1"><strong>Sale date:</strong> {{ $comic->sale_date }}</div>
            <div class="pt-1"><strong>Description:</strong> {{ $comic->description }}</div>
            <div class="pt-2"><strong>U.S.Price:</strong> {{ $comic->price }}</div>
        </div>
    </div>
@endsection
