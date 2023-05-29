@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Comics</h1>
        <a href="{{route('comics.create')}}">
        <i>New Comic</i></a>
    </div>
    <div class="row row-cols-1 py-5">
        @forelse ($comics as $comic)
        <div class="col g-3">
            <div class="card">
                <div class="row g-0">
                    <div class="col-4">
                      <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                    </div>
                    <div class="col-8">
                      <div class="card-body">
                        <p class="card-text">Description: "{{ $comic->description}}"</p>
                        <p class="card-text"><small class="text-body-secondary">price: {{ $comic->price }}</small></p>
                        <p class="card-text"><small class="text-body-secondary">sale_date:{{ $comic->sale_date }}</small></p>
                        <p class="card-text"><small class="text-body-secondary">type: {{ $comic->type }}</small></p>
                        <a href="{{route('comics.show', $comic->id)}}" title="View">Details</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        @empty
        <tr scope="row">
            <td>No Comics found</td>
        </tr>
        @endforelse
    </div>
</div>



@endsection