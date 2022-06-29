<header class="gb-container">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{asset('img/dc-logo.png')}}" alt="Logo">
        </a>
    </div>

    <nav>
      <ul class="d-flex m-0">
        <li>
          <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">home</a>
          <a href="{{route('comics.index')}}">comics</a>
        </li>
      </ul>
    </nav>
</header>
