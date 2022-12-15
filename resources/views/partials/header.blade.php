<header>
    <div class="container">
        <div class="logo text-center">
            <img src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="">
        </div>
        <nav>
            <ul class="d-flex justify-content-center">
                <li class="mx-4">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="mx-4">
                    <a href="{{ route('products') }}">Prodotti</a>
                </li>
                <li class="mx-4">
                    <a href="{{ route('news') }}">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
