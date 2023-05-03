@extends('layouts.app')

@section('page-main')
<section id="dettaglio_prodotto">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="img-box">
                    <img src="{{ $comics_single['thumb'] }}" alt="{{ $comics_single['title'] }}">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="descrizione_prodotto">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row mt-5">
                    <div class="title">
                        <h1>{{ $comics_single['title'] }}</h1>
                    </div>
                </div>
                <div class="row price py-2 justify-content-between">
                    <div class="col-9 d-flex">
                        <div class="col">U.S.Price: <span>{{ $comics_single['price'] }}</span></div>
                        <div class="col-1 text-uppercase">available</div>
                    </div>
                    <div class="col-3 text-center">
                        Check Availability
                    </div>
                </div>
                <div class="descrizione-prodotto my-2">
                    <p>{{ $comics_single['description'] }}</p>
                </div>
            </div>
            <div class="col-4  mt-3">
                <h3 class="text-uppercase text-center ps-5">advertisement</h3>
                <div class="pubblicità px-3">
                    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

