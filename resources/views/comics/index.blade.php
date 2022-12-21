@extends('layouts.app')

@section('title', 'Tutti i fumetti')

@section('content')
    {{-- banner --}}
    <section class="bg-secondary">
        <div class="container py-4">
            <h2 class="text-center">Tutti i fumetti</h2>
        </div>
    </section>
    {{-- /banner --}}


    {{-- table --}}
    <section>
        <div class="container mt-4">
            <div class="text-end">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea nuovo fumetto</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Data di vendita</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Dettagli</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $item)
                        <tr>
                            <th scope="row">{{ $item->title }}</th>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->sale_date }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $item->id) }}" type="button"
                                    class="btn btn-outline-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </section>
    {{-- table --}}

@endsection
