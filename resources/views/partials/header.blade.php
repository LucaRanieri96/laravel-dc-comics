<div class="blue-bg">
    <div class="container d-flex justify-content-end">
        <span>DC POWER VISA</span>
        <span class="ms-5">ADDITIONAL DC SITES</span>
    </div>
</div>
<header id="app_header" class="py-2">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <img src="/assets/images/dc-logo.png" alt="" />
      </div>
      <div class="nav">
        <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'bg-danger text-white' : '' }}   " href="{{ route('welcome')}}" aria-current="page">HOME</a>
        <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'bg-danger text-white' : '' }} " href="{{ route('comics.index')}}">COMICS</a>
        <div><a href="#">TV</a></div>
        <div><a href="#">GAMES</a></div>
        <div><a href="#">COLLECTIBLES</a></div>
        <div><a href="#">VIDEOS</a></div>
        <div><a href="#">FANS</a></div>
        <div><a href="#">NEWS</a></div>
        <div><a href="#">SHOP</a></div>
      </div>
      <div>
          <input type="text" placeholder="Search" class="input">
      </div>
    </div>
  </header>
