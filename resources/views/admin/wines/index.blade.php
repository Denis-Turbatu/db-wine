@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1>Lista Wines</h1>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Winery</th>
                        <th scope="col">Wine</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wines as $wine)
                        <tr>
                            <td>{{$wine->winery}}</td>
                            <td>{{$wine->wine}}</td>
                            <td>{{$wine->rating}}</td>
                            <td>{{$wine->location}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
