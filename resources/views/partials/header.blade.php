<header>
    <div class="top">
        <div class="container top_2 d-flex justify-content-end align-items-center gap-4">
            <p>DC POWER VISA</p>
            <p>Additional DC sites</p>
        </div>
    </div>
    <div class="bottom">
        <nav class="bg-body-tertiary">
            <div class="container-fluid text-center">
                <div class="d-flex justify-content-center align-items-center py-3 gap-4" id="navbarNav">
                    <div class="logo">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                    </div>
                    <ul class="list-unstyled d-flex">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page"
                                href="{{ url('/characters') }}">Characters</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/comics') }}">Comics</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/tv') }}">Tv</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/games') }}">Games</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/collectibles') }}">Collectibles</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/videos') }}">Videos</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/fans') }}">Fans</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/news') }}">News</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron">
    </div>
</header>