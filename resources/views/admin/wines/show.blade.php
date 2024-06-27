@extends('layouts.admin')

@section('content')
        <p>{{$wine->winery}}</p>
        <p>{{$wine->wine}}</p>
        <p>{{$wine->rating}}</p>
        <p>{{$wine->location}}</p>
        <img src="{{ asset('storage/'.$wine->cover_image) }}" alt="">
        

<a href="{{route('admin.wines.index')}}">Torna Indietro</a>
@endsection