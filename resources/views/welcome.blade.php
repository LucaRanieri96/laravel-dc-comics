@extends('layouts.app')


@section('content')
<div id="banner"></div>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Best Comics</h1>
        <p class="col-md-8 fs-4">Welcome! Come and visit our comic page, you will surely find something that suits your taste! If you can't find the right comic for you, check out the reviews or you can contact one of our sales assistants to provide you with all the details about a series or a specific comic!</p>
        <button class="btn btn-primary btn-lg" type="button"><a href="{{ route('admin.comics.index')}}">comics</a></button>
    </div>
</div>
@endsection