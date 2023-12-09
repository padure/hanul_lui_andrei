@extends('layouts.frontend')
@section('title', '| Contacte')

@php
    $contacts = "";
    if(request()->routeIs('contacts.index')) {
        $contacts = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 heading-title">
                <h2 class="mt-5 text-center">Contacte</h2>
                <p class="text-center">
                    Pentru rezervări și răsfățuri culinare, sună-ne la +37369770118, +37369173560 sau scrie-ne pasiunea ta la hanulluiandrei@gmail.com. Explorează experiența noastră pe Facebook și Instagram pentru porții zilnice de inspirație gastronomică și surprize delicioase. Suntem aici pentru a transforma fiecare contact într-o aventură culinară memorabilă!
                </p>
            </div>
        </div>
    </div>
    @include('frontend.partials.contacts')
@endsection

@push('styles')
    <style>
        .full_bg {
            height: auto !important;
        }
    </style>
@endpush

@push('scripts')

@endpush
