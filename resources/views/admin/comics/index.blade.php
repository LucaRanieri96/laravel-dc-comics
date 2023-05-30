@extends('layouts.app')

@section('content')
<div class="container py-5">

    {{-- @if (session('message'))
    <div class="alert alert-primary" role="alert">
        <strong>{{session('message')}}</strong>
    </div>

    @endif --}}

    <h1>Comics List</h1>


    <a class="btn btn-primary my-2" href="{{route('admin.comics.create')}}" role="button">New Comic</a>
    
    <div class="table-responsive">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMG</th>
                    <th scope="col">TITLE</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>
                        <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                    </td>
                    <td>{{$comic->title}}</td>

                </tr>

                @empty
                <tr class="">
                    <td>No results</td>
                </tr>
                @endforelse


            </tbody>
        </table>
    </div>


</div>





@endsection