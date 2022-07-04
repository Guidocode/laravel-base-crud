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
                        <input type="text" id="title" name="title" placeholder="Titolo fumetto"
                        value="{{ old('title') }}"
                        class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">URL immagine</label>
                        <input type="text" id="image" name="image" placeholder="URL immagine fumetto"
                        value="{{ old('image') }}"
                        class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" id="type" name="type" placeholder="Tipo"
                        value="{{ old('type') }}"
                        class="form-control @error('type') is-invalid @enderror">
                        @error('type')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('title', 'Crea un Fumetto')
