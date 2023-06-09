@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="container py-2">
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        </div>
    @endif

    <div class="container pb-5">
        <h1 class="py-5">Comics List</h1>

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

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $comic->id }}">Delete</button>

                                <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Delete
                                                    {{ $comic->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('admin.comics.destroy', $comic->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



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
