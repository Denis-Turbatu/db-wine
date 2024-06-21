@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1 class="my-5">Aggiungi un vino!</h1>

        <form action="{{ route('admin.wines.store') }}" method="POST" class="mb-3">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mb-3">
                <label for="wine" class="form-label fw-semibold">Wine</label>
                <input type="wine" class="form-control" id="wine" name="wine">
            </div>

            <div class="mb-3">
                <label for="winery" class="form-label fw-semibold">Winery</label>
                <input type="winery" class="form-control" id="winery" name="winery">
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label fw-semibold">Rating</label>
                <input type="rating" class="form-control" id="rating" name="rating">
            </div>

            <div class="mb-3">
                <label for="rating_reviews" class="form-label fw-semibold">Rating_reviews</label>
                <input type="rating_reviews" class="form-control" id="rating_reviews" name="rating_reviews">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label fw-semibold">Location</label>
                <input type="location" class="form-control" id="location" name="wine">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">Image</label>
                <input type="image" class="form-control" id="image" name="image">
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>

        <a href="{{route('admin.wines.index')}}" class="text-decoration-none text-white bg-danger p-2 rounded-2">Torna alla pagina Iniziale</a>
    </div>
@endsection
