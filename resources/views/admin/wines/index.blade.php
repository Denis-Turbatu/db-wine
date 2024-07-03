@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1>Lista Wines</h1>
            <a href="{{route('admin.wines.create')}}" class="px-4 py-2 bg-success text-white rounded-2 text-decoration-none"">Crea</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Winery</th>
                        <th scope="col">Wine</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Location</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wines as $wine)
                        <tr>
                            <td>{{$wine->winery}}</td>
                            <td>{{$wine->location}}</td>
                            <td>{{$wine->rating}}</td>
                            <th scope="col">
                                <div class="d-flex gap-2">
                                    <a href="{{route('admin.wines.show', ['wine'=>$wine->id])}}" class="px-3 py-2 bg-primary text-white rounded-2 text-decoration-none">Dettagli</a>
                                    <a href="{{route('admin.wines.edit', ['wine'=>$wine->id])}}" class="px-3 py-2 bg-warning text-white rounded-2 text-decoration-none">Modifica</a>
                                    <form action="{{route('admin.wines.destroy', ['wine'=>$wine->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-2 bg-danger text-white rounded-2 text-decoration-none border border-none">Cancella</button>
                                    </form>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                {{$wines->links()}}
            </div>

        </div>
    </div>
@endsection
