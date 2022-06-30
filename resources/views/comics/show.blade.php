@extends('layouts.main')

@section('content')

    <div class="gb-container">

        <div class="container-fluid">
            <div class="row row-cols-2">

                <div class="col">
                    <h2>{{ $comic->title }}</h2>
                    <p>{{ $comic->type }}</p>
                    {{-- bottone EDIT --}}
                </div>

                <div class="col">
                    <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
                </div>

            </div>
        </div>

    </div>

@endsection

@section('title', 'Comics | Show')
