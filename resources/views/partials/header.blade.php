<header class="bg-dark text-center py-4">
    <nav class="nav justify-content-center mt-4">
        <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'bg-danger text-white' : '' }}   " href="{{ route('welcome')}}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'bg-danger text-white' : '' }} " href="{{ route('comics.index')}}">Fumetti</a>

    </nav>
</header>
