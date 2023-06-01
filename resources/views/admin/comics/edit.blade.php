@extends('layouts.app')


@section('content')

    <div class="container py-5">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h5 class="text-uppercase text-muted my-4">Edit: {{ $comic->title }}</h5>

        <form action="{{ route('admin.comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Comic title here " aria-describedby="titleHelper" value="{{old('title', $comic->title)}}">
                <small id="titleHelper" class="text-muted">Type the title of the comic max 50 characters</small>
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <strong>Name, Error:</strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" id="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" placeholder="Comic thumb here "
                    aria-describedby="thumbHelper" value="{{ old('thumb', $comic->thumb) }}">
                <small id="thumbHelper" class="text-muted">Type the image of the comic max 500 characters</small>
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>Thumb, Error:</strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" placeholder="Comic description here "
                    aria-describedby="descriptionHelper" value="{{ old('description', $comic->description) }}">
                <small id="descriptionHelper" class="text-muted">Type the description of the comic max 500
                    characters</small>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        <strong>Description, Error:</strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" placeholder="Comic price here "
                    aria-describedby="priceHelper" value="{{ old('price', $comic->price) }}">
                <small id="priceHelper" class="text-muted">Type the price of the comic</small>
                @error('price')
                    <div class="alert alert-danger" role="alert">
                        <strong>Price, Error:</strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" name="sale_date" id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" placeholder="Comic sale date here "
                    aria-describedby="sale_dateHelper" value="{{ old('sale_date', $comic->sale_date) }}">
                <small id="sale_dateHelper" class="text-muted">Type the sale date of the comic</small>
                @error('sale_date')
                    <div class="alert alert-danger" role="alert">
                        <strong>Sale Date, Error:</strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                    placeholder="Comic type here " aria-describedby="typeHelper" value="{{ old('type', $comic->type) }}">
                <small id="typeHelper" class="text-muted">Type the sale "type" of the comic</small>
                @error('type')
                    <div class="alert alert-danger" role="alert">
                        <strong>Type, Error:</strong>{{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark w-100 my-4">Save changes</button>

        </form>

    </div>


@endsection
