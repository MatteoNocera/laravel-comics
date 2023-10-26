<header id="app_header">

    <nav class="navbar navbar-expand py-0">

        <div class="container">

            <a class="navbar-brand py-0" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC" class="">
            </a>

            <ul class="navbar-nav d-flex">


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('characters')}}">CHARACTERS</a>

                    <a class="nav-link" href="{{ route('comics')}}">COMICS</a>
                </li>



            </ul>

        </div>

    </nav>

</header>