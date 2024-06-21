@extends('layouts.admin')

@section('content')
    <h1>Modifica Informazioni Vino :</h1>

    <form action="{{ route('admin.wines.update', ['wine' => $wine->id])}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="winery" class="form-label">Azienda Vinicola : </label>
            <input type="text" class="form-control" id="winery" name="winery"
                value="{{ old('winery', $wine->winery) }}">
        </div>
        <div class="mb-3">
            <label for="wine" class="form-label">Nome Vino :</label>
            <input type="text" class="form-control" id="wine" name="wine"
                value="{{ old('wine', $wine->wine) }}">
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Voto recensioni :</label>
            <input type="text" class="form-control" id="rating" name="rating"
                value="{{ old('rating', $wine->rating) }}">
        </div>
        <div class="mb-3">
            <label for="rating_reviews" class="form-label">Numero Voti :</label>
            <input type="text" class="form-control" id="rating_reviews" name="rating_reviews"
                value="{{ old('rating_reviews', $wine->rating_reviews) }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Indirizzo :</label>
            <input type="text" class="form-control" id="location" name="location"
                value="{{ old('location', $wine->location) }}">
        </div>
        <div>
            <label for="image">Immagine vino :</label>
            <input type="file" name="image" id="image">
          </div>
    </form>
@endsection