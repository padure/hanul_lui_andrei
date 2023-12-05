<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                Hanul lui
                <span>Andrei</span>
            </a>
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ $home??'' }}"><a class="nav-link" href="{{ route('home.index') }}">Acasă</a></li>
                    <li class="nav-item {{ $service??'' }}"><a class="nav-link" href="{{ route('service.index') }}">Servicii</a></li>
                    <li class="nav-item {{ $about??'' }}"><a class="nav-link" href="{{ route('about.index') }}">Despre noi</a></li>
{{--                    <li class="nav-item {{ $prices??'' }}"><a class="nav-link" href="{{ route('prices.index') }}">Prețuri</a></li>--}}
                    <li class="nav-item {{ $gallery??'' }}"><a class="nav-link" href="{{ route('gallery.index') }}">Galerie</a></li>
                    <li class="nav-item {{ $contacts??'' }}"><a class="nav-link" href="{{ route('contacts.index') }}">Contacte</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
