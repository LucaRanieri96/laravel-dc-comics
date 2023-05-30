@extends('layouts.app')


@section('content')

<div class="container py-5">
    <h5 class="text-uppercase text-muted my-4">Edit: {{$comic->title}}</h5>

    <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Comic title here " aria-describedby="titleHelper" value="{{$comic->title}}" required >
            <small id="titleHelper" class="text-muted">Type the title of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Thumb</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Comic image here " aria-describedby="imageHelper" value="{{$comic->thumb}}">
            <small id="imageHelper" class="text-muted">Type the image of the comic max 500 characters</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Comic description here" aria-describedby="descriptionHelper" value="{{$comic->description}}">
            <small id="descriptionHelper" class="text-muted">Type the description of the comic max 500 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Comic price here " aria-describedby="priceHelper" value="{{$comic->price}}">
            <small id="priceHelper" class="text-muted">Type the price of the comic</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale_date here " aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted">Type the sale date of the comic</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comic type here " aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Type the sale "type" of the comic</small>
        </div>
        
        <button type="submit" class="btn btn-dark w-100 my-4">Save changes</button>

    </form>

</div>


@endsection