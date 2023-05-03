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
<div id="descrizione_prodotto">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title">
                <h1>{{ $comics_single['title'] }}</h1>
            </div>
        </div>
    </div>
</section>
@endsection

