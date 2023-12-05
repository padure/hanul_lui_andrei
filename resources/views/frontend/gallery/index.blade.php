@extends('layouts.frontend')
@section('title', '| Galerie foto')

@php
    $gallery = "";
    if(request()->routeIs('gallery.index')) {
        $gallery = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center pt-5">
                        <h2>Galerie Foto</h2>
                        <p>
                            O incursiune vizuală în lumea noastră culinară și atmosfera primitoare. Descoperă clipele captivante și preparatele irezistibile surprinse în fotografii. Hanul lui Andrei, un loc unde fiecare detaliu devine o poveste visuală, așteaptă să fie explorat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_1.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_1.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_2.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_2.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_3.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_3.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_4.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_4.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_5.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_5.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_6.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_6.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_7.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_7.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_8.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_8.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_9.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_9.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_10.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_10.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_11.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_11.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_12.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_12.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_13.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_13.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_14.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_14.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_15.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_15.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_16.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_16.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_17.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_17.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_18.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_18.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_19.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_19.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_20.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_20.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_21.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_21.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_22.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_22.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_23.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_23.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_24.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_24.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_25.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_25.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_26.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_26.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_27.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_27.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_28.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_28.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_29.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_29.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_30.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_30.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_31.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_31.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_32.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_32.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_33.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_33.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_34.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_34.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_35.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_35.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="{{ asset('images/galerie/gal_36.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/galerie/gal_36.jpg') }}" alt="Gallery Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .full_bg{
            height: auto!important;
        }
        .tz-gallery .lightbox img{
            aspect-ratio: 3 / 2!important;
            object-fit: cover;
        }
    </style>
@endpush

@push('scripts')

@endpush
