@extends('layouts.frontend')
@section('title', '| Servicii')

@php
    $service = (request()->routeIs('service.index')) ? "active" : "";
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <div class="container">
        <div class="row py-3"></div>
        <div class="row">
            <div class="col-lg-12 pt-5">
                <div class="heading-title text-center">
                    <h2 class="pt-5">Servicii Noastre</h2>
                    <p>
                        Explorează serviciile noastre și transformă orice eveniment într-o experiență memorabilă. Sună-ne la +373 78 953 583 sau scrie-ne la hanulluiandrei@gmail.com pentru a începe planificarea. Hanul lui Andrei - unde visurile tale culinare devin realitate!
                    </p>
                </div>
            </div>
        </div>
        <div class="row mb-3 services">
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/restaurant_3.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Restaurant pentru Evenimente</h4>
                    <ul>
                        <li><span>Evenimente Memorabile</span></li>
                    </ul>
                    <p>
                        Creează amintiri de neuitat cu evenimentele tale speciale. La Hanul lui Andrei, transformăm orice ocazie într-o experiență gastronomică memorabilă. Contactează-ne pentru a începe planificarea!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/karaoke_3.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Karaoke</h4>
                    <ul>
                        <li><span>Distracții</span></li>
                    </ul>
                    <p>
                        Distrează-te și exprimă-ți creativitatea în serile noastre de karaoke! Împărtășește momente de voie bună cu prietenii și familia. Vino și descoperă latura distractivă a Hanului lui Andrei!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/terasa_3.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Terasă Deschisă și Închisă</h4>
                    <ul>
                        <li><span>Bucură-te de Aer Liber</span></li>
                    </ul>
                    <p>
                        Savurează fiecare moment sub cerul liber sau relaxează-te în confortul terasei închise. Cu facilități complete și servicii impecabile, terasele noastre sunt locul perfect pentru a te bucura de atmosfera noastră primitoare.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/foisor_5.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Foisoare Deschise și Închise</h4>
                    <ul>
                        <li><span>Relexare</span></li>
                    </ul>
                    <p>
                        Bucură-te de intimitate în fiecare foisor, fie deschis, fie închis. Oferind confort și o ambianță relaxată, foisoarele noastre sunt destinația perfectă pentru momente de relaxare în mijlocul naturii.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/crisma_2.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Crâșmă</h4>
                    <ul>
                        <li><span>Atmosferă Autentică</span></li>
                    </ul>
                    <p>
                        Descoperă autenticitatea în crasma noastră. O selecție variată de băuturi și gustări așteaptă să-ți satisfacă pofta. Hanul lui Andrei - locul unde tradiția și savoarea se întâlnesc.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/restaurant_4.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Hotel</h4>
                    <ul>
                        <li><span>Ședere Confortabilă</span></li>
                    </ul>
                    <p>
                        Transformă fiecare vizită într-o experiență completă. Camerele noastre confortabile oferă odihnă liniștită și facilități deosebite. Bucură-te de șederea ta la Hanul lui Andrei, unde ospitalitatea devine tradiție.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-2 border">
                <div class="blog-img-box">
                    <img class="img-fluid service_image" src="{{ asset('images/services/teren_2.jpg') }}" alt="Service 1">
                </div>
                <div class="blog-detail mt-2">
                    <h4>Teren de Joacă pentru Copii</h4>
                    <ul>
                        <li><span>Joacă și Veselie pentru Cei Mici</span></li>
                    </ul>
                    <p>
                        La Hanul lui Andrei, ne gândim și la cei mici. Toate terasele noastre sunt dotate cu terenuri de joacă amenajate special pentru copii. Oferim distracție și siguranță pentru cei mici, astfel încât toată familia să se bucure de fiecare moment petrecut la noi.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
    </style>
@endpush

@push('scripts')

@endpush
