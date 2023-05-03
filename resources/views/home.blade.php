@extends('layouts.app')

@section('page.main')
<section id="posters">
    <div class="container">
        <div class="btn btn-primary">
            <h4>CURRENT SIRIES</h4>
        </div>
        <div class="row poster_list d-flex flex-wrap">
             @foreach ($comics as $item)
                <div class="card col-md-2">
                    <img src="{{ $item['thumb'] }}" alt="Immagine">
                    <div class="card-body">
                        <h3>{{ $item['title'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="btn btn-primary">
            <h4>LOAD MORE</h4>
        </div>
    </div>
</section>
@endsection