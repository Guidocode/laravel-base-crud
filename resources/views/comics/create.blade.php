@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="mb-3">Inserisci un nuovo fumetto</h2>
                <form action="{{ route('comics.store') }}" method="POST">
                    {{-- @csrf deve essere inserito in tutti i form altrimenti il form non è valido --}}
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo fumetto</label>
                        {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
                        <input type="text" id="title" name="title" class="form-control" placeholder="Titolo fumetto">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="Tipo" >
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">URL immagine fumetto</label>
                        <input type="text" id="image" name="image" class="form-control" placeholder="URL immagine fumetto" >
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('title', 'Crea un Fumetto')
