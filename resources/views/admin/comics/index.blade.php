@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Comics List</h1>
        
        <a class="btn btn-primary my-2" href="{{ route('admin.comics.create') }}" role="button">New Comic</a>

        <div class="table-responsive">
            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">IMG</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">Functions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($comics as $comic)
                        <tr>
                            <td scope="row">{{ $comic->id }}</td>
                            <td>
                                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                            </td>
                            <td>{{ $comic->title }}</td>
                            <td>

                                <a class="btn btn-secondary" href="{{ route('admin.comics.edit', $comic->id) }}"
                                    role="button">Edit</a>



                                <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

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
