@extends('layouts.app')

@section('content')
    <section class="section-pasta">
        <h2> La nostra pasta</h2>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($pasta as $item)
                    <div class="col mb-3">
                        <div class="pasta-card">
                            <img src="{{ $item['src'] }}" alt="{{ $item['titolo'] }}">
                            <h4>{{ $item['titolo'] }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
