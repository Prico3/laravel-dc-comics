@yield('layouts.app')

@section('title', 'Modifica')


@section('content')
    <div class="container">
        <h2>Modifica {{ $comics->title }}</h2>
        <form action="{{ route('comics.update', $comics->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comics->title }}">
            </div>
            <div class="mb-2">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description">{{ $comics->description }}</textarea>
            </div>
            <div class="mb-2">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comics->thumb }}">
            </div>
            <div class="mb-2">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comics->price }}">
            </div>
            <div class="mb-2">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comics->series }}">
            </div>
            <div class="mb-2">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comics->sale_date }}">
            </div>
            <div class="mb-2">
                <label for="type">Genere</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comics->type }}">
            </div>

            <button type="submit" class="btn btn-success">Salva</button>
        </form>
    </div>
@endsection
