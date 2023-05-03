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
<section id="more-info" class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div>
                        <h3 class="py-3">Talent</h3>
                    </div>
                </div>
                <div class="row justify-content-between py-2">
                    <div class="col-4"><h6>Art by:</h6></div>
                    <div class="col-8">
                        @foreach ($comics_single['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                         @endforeach
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4"><h6>Written by:</h6></div>
                    <div class="col-8">
                        @foreach ($comics_single['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div>
                        <h3 class="py-3">Specs</h3>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4"><h6>Series:</h6></div>
                    <div class="col-8">
                        <a href="#">{{ $comics_single['series'] }}</a>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4"><h6>U.S. Price:</h6></div>
                    <div class="col-8">{{ $comics_single['price'] }}</div>
                </div>
                <div class="row py-2">
                    <div class="col-4"><h6>On Sale Date:</h6></div>
                    <div class="col-8">{{ $comics_single['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

