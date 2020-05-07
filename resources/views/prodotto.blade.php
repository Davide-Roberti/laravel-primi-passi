@php
    $arrayProdotti = config('prodotti');
    $prodotto = $arrayProdotti[$id];
@endphp

@extends('layouts.layout')
@section('titolo')
    La Molisana
@endsection

@section('contenuto-principale')
    <div class="prodotto-singolo">
        <div class="container">
            <div class="immagini-titolo">
                <h2>{{$prodotto['titolo']}}</h2>
                <img src="{{$prodotto['src-h']}}" alt="immagine uno">
                <img src="{{$prodotto['src-p']}}" alt="immagine due">
            </div>
            <p>{{$prodotto['descrizione']}}</p>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
