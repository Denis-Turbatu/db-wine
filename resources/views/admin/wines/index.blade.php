@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1>Lista Wines</h1>
            <a href="{{route('admin.wines.create')}}">Crea</a>
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
                            <td>{{$wine->wine}}</td>
                            <td>{{$wine->rating}}</td>
                            <td>{{$wine->location}}</td>
                            <th scope="col">
                                <a href="{{route('admin.wines.show', ['wine'=>$wine->id])}}">Dettagli</a>
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
