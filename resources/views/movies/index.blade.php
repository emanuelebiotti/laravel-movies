@extends('layouts.app')
@section('content')

  <div class="container">
    <ul>
      @foreach ($movies as $movie)
        <li>Titolo: {{ $movie->title }}, Anno: {{ $movie->release}}, Genere: {{ $movie->genre ? $movie->genre->name : 'n.a.' }}</li>
      @endforeach
    </ul>
  </div>

@endsection
