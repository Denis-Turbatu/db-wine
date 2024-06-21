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
            <label for="wine" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="wine" name="wine"
                value="{{ old('wine', $wine->wine) }}">
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="rating" name="rating"
                value="{{ old('rating', $wine->rating) }}">
        </div>
        <div class="mb-3">
            <label for="rating_reviews" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="rating_reviews" name="rating_reviews"
                value="{{ old('rating_reviews', $wine->rating_reviews) }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="location" name="location"
                value="{{ old('location', $wine->location) }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="image" name="image"
                value="{{ old('image', $project->image) }}">
        </div>
    </form>
@endsection