@extends('layouts.app')

@section('title', 'Crea una nuovo fumetto')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Crea un nuovo fumetto</h2>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-2">
                    <label for="description">Descrizione</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-2">
                    <label for="thumb">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-2">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-2">
                    <label for="series">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-2">
                    <label for="sale_date">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-2">
                    <label for="type">Genere</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                <button type="submit" class="btn btn-success">Salva</button>

            </form>
        </div>
    </section>
@endsection
