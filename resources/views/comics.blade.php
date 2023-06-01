@extends('layouts.app')

@section('content')
    <div id="banner"></div>
    <div class="main_top">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center">
                <div id="title">
                    <h3>CURRENT SERIES</h3>
                </div>
                <div>
                    <a class="btn btn-outline-light" href="{{ route('admin.index') }}">Admin View</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 py-5">
                @forelse ($comics as $comic)
                    <div class="col">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                        <div class="my-2">
                            <a id="titles" href="{{ route('admin.comics.show', $comic->id) }}">{{ $comic->title }}</a>
                        </div>
                    </div>
                @empty
                    <tr scope="row">
                        <td>No Comics found</td>
                    </tr>
                @endforelse
            </div>
            <div class="d-flex justify-content-center pb-4">
                <button type="button" class="btn btn-primary" id="load-more-btn" data-page="1">Load More</button>
            </div>
        </div>
    </div>
@endsection
