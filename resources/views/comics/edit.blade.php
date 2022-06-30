@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="mb-3">Modifica di: {{ $comic->title }}</h2>
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    {{-- @csrf deve essere inserito in tutti i form altrimenti il form non è valido --}}
                    @csrf
                    {{-- se il method è PUT|PATCH|DELETE nel tag form mettere method="POST" e aggiungere in @method in blade --}}
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo comic</label>
                        {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
                        <input type="text" id="title"
                            name="title"
                            value="{{ $comic->title }}"
                            class="form-control" placeholder="Titolo comic">
                    </div>
                    <div class="mb-3">
                        <img class="w-25" src="{{ $comic->image }}" alt=""><br>
                        <label for="image" class="form-label">URL immagine</label>
                        <input type="text" id="image"
                        name="image"
                        value="{{ $comic->image }}"
                        class="form-control" placeholder="URL immagine" >
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" id="type"
                        name="type"
                        value="{{ $comic->type }}"
                        class="form-control" placeholder="Tipo comic" >
                    </div>


                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>

    </div>
@endsection
