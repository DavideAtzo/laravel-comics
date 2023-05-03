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
            <div class="title">
                <h1>{{ $comics_single['title'] }}</h1>
            </div>
            <div class="row">
                <div class="col-9 d-flex">
                    <div class="col">U.S.Price: <span>{{ $comics_single['price'] }}</span></div>
                    <div class="col-1">available</div>
                </div>
                <div class="col-3">
                    Check Availability
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

