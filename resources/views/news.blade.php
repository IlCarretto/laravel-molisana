@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2>Pagina news</h2>
            <div class="row row-cols-4">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="post">
                            <img src="{{ $post['img'] }}" alt="">
                            <h3>{{ $post['title'] }}</h3>
                            <p>{{ $post['body'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
