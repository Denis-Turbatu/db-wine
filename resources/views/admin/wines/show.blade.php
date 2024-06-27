@extends('layouts.admin')

@section('content')
        <p>{{$wine->winery}}</p>
        <p>{{$wine->wine}}</p>
        <p>{{$wine->rating}}</p>
        <p>{{$wine->location}}</p>
        

<a href="{{route('admin.wines.index')}}">Torna Indietro</a>
@endsection