@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($sakinler as $sakin)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset($sakin->resim) }}" class="card-img-top" alt="{{ $sakin->ad }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sakin->ad }} {{ $sakin->soyad }}</h5>
                            <p class="card-text">{{ $sakin->adres }}</p>
                            <a href="{{ route('sakinler.show', $sakin->id) }}" class="btn btn-primary">Devamını Oku</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
