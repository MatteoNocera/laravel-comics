@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <div id="app_main">
        <div class="container">

            <div class="position-relative">

                <button id="current" class="btn btn-primary mb-3 position-absolute">CURRENT SERIES</button>
            </div>

            <div class="row row-cols-sm-2 justify-content-center py-3 g-4">


                <div class="card">
                    <img class="" src="{{ $comics[0]['thumb'] }}" alt="">
                    <div class="py-3">
                        <h5 class="card-text">{{ $comics[0]['series'] }}</h5>
                    </div>
                </div>




            </div>

            <div class="d-flex justify-content-center">

                <button id="load" class="btn btn-primary mb-3 px-4">Load More</button>
            </div>

        </div>

    </div>

    <section id="actions">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 justify-content-between justify-content-md-center">

                @foreach ($actions as $action)
                    <div class="col1">
                        <a href="#">
                            <img src="{{ Vite::asset($action['img']) }}" alt=""><span>{{ $action['text'] }}</span>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>

    </section>
    <!-- /#app_main -->
@endsection
