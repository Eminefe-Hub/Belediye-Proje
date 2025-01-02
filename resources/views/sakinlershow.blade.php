@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ asset($sakin->resim) }}" class="card-img-top" alt="{{ $sakin->ad }}">
            <div class="card-body">
                <h5 class="card-title">{{ $sakin->ad }} {{ $sakin->soyad }}</h5>
                <p class="card-text">Telefon: {{ $sakin->telefon }}</p>
                <p class="card-text">E-posta: {{ $sakin->email }}</p>
                <p class="card-text">Adres: {{ $sakin->adres }}</p>
            </div>
        </div>
    </div>
@endsection
