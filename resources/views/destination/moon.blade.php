@extends('layouts.app')

@section('content')
    @include('header')

    <div class="container-destination">
        <h2>
            <p><b>01</b></p>CHOISISSEZ VOTRE DESTINATION
        </h2> 

        <div class="image">
            <!-- Add image specific to Lune -->
            <img src="/images/lune.jpg" alt="Lune Image">
        </div>
    </div>

    <div class="bloc-description">
        <nav>
            <ul>
                <li><a href="{{ url('/lune') }}">LUNE</a></li>
                <li><a href="{{ url('/mars') }}">MARS</a></li>
                <li><a href="{{ url('/europe') }}">EUROPE</a></li>
                <li><a href="{{ url('/titan') }}">TITAN</a></li>        
            </ul>
        </nav>

        <h1>Lune</h1>
        <p>Description for Lune goes here.</p>

        <div class="bloc-distance">
            <div class="distance"></div>
            <div class="duree"></div>
        </div>
    </div>
@endsection
