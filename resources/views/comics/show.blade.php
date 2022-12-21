@extends('layouts.app')

@section('title', $comics->title)


@section('content')
    <div class="container">
        <h2>Fumetto: {{ $comics->id }}</h2>
        <div>
            @if (!empty($comics->thumb))
                <img src="{{ $comics->thumb }}" alt="">
            @else
                <p>Nessuna immagine presente</p>
            @endif
        </div>
        <dl>
            <dt>Titolo</dt>
            <dl>{{ $comics->title }}</dl>
            <dt>Descrizione</dt>
            <dl>{{ $comics->description }}</dl>
            <dt>Prezzo</dt>
            <dl>{{ $comics->price }}</dl>
            <dt>Data di vendita</dt>
            <dl>{{ $comics->sale_date }}</dl>
            <dt>Genere</dt>
            <dl>{{ $comics->type }}</dl>
        </dl>
    </div>
@endsection
