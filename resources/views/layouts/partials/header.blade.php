<header>

    <nav class="navbar navbar-expand py-0">

        <div class="container">

            <div class="d-flex justify-content-between align-items-center">

                <a class="navbar-brand py-0" href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC" class="p-3">
                </a>

                <ul class="navbar-nav d-flex justify-content-between">


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('characters') }}">CHARACTERS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics') }}">COMICS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                            href="#">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">One</a></li>
                            <li><a class="dropdown-item" href="#">Two</a></li>
                            <li><a class="dropdown-item" href="#">Three</a></li>
                        </ul>
                    </li>


                </ul>

                <div class="search_control d-flex justify-content-end">
                    <input type="text" class="text-center form-control" name="searchbar" id="searchbar"
                        placeholder="Search 🔍">

                </div>
            </div>

        </div>

    </nav>

</header>
