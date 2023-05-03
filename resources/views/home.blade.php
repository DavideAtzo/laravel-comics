@extends('layouts.app')

@section('page.main')
<section id="posters">
    <div class="container">
        <div class="poster_list d-flex">
             @foreach ($comics as $item)
                <div class="card">
                    <img src="{{ $item['thumb'] }}" alt="Immagine">
                    <div class="card-body">
                        <h3>{{ $item['title'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection