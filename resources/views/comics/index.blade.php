@extends('layouts.main')

@section('content')

    <div class="container">
        {{-- Comics --}}
        <!-- Titolo contenitore -->
        <div class="title-content">Comics</div>
        <!-- /Titolo contenitore -->


        <table class="table bg-light">
            <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">title</th>
                <th scope="col">slug</th>
                <th scope="col">image</th>
                <th scope="col">type</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic )
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->slug}}</td>
                        <td>{{$comic->image}}</td>
                        <td>{{$comic->type}}</td>
                        <td class="d-flex">
                            <a class="btn btn-success" href="{{ route('comics.show', $comic) }}">SHOW</a>
                            <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">EDIT</a>
                            <form class="d-inline"
                                onsubmit="return confirm('confermi l\'eliminazione di: {{ $comic->title }}?')"
                                action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection

@section('title', 'Comics')
