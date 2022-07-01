@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="container-fluid">
            <div class="row row-cols-2">

                <div class="col d-flex flex-column justify-content-between">
                    <div class="top">
                        <h2>{{ $comic->title }}</h2>
                        <p>{{ $comic->type }}</p>
                        <a class="btn btn-primary mx-1" href="{{ route('comics.edit', $comic) }}">EDIT</a>
                    </div>
                    <div class="bottom my-5">
                        <a class="btn btn-dark mx-1" href="{{ route('comics.index', $comic) }}"><< back</a>
                    </div>
                </div>

                <div class="col">
                    <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
                </div>

            </div>
        </div>

    </div>

@endsection

@section('title', 'Comics | Show')
