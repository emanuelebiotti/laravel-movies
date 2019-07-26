@extends('layouts.app')
@section('page_title', 'Inserisci un nuovo film')
  <div class="container mt-5">
    <h1>Inserimento di un film</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="" action="{{ route('movies.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="inserisci il titolo">
      </div>
      <div class="form-group">
        <label for="plot">Trama</label>
        <textarea class="form-control" name="plot" rows="8" cols="80" placeholder="inserisci la trama">{{ old('plot') }}</textarea>
      </div>
      <div class="form-group">
        <label for="release">Anno di uscita</label>
        <input class="form-control" type="number" name="release" value="{{ old('release') }}">
      </div>
      <div class="form-group">
        <select class="form-control" name="genre_id">
          <option value="">Seleziona il genere</option>
          @foreach ($genres as $genre)
            <option value="{{ $genre->id }}"> {{ $genre->name }} </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <input class="form-control" type="submit" value="inserisci film">
      </div>
    </form>

  </div>
@section('content')
@endsection
