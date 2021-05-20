@extends('layouts.app')

@section('main')
  <main>
    @foreach ($comics as $comic)
      <div class="card">
        <a href="{{route('comics.show', ['comic' => $comic->id])}}">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h4>{{$comic->title}}</h4>
        <h5>{{$comic->series}} - <span>{{$comic->type}}</span></h5>
        <p class="text">{{$comic->description}}</p>
        <p>{{$comic->price}} €</p>
        <p>Release Date: {{$comic->sale_date}}</p>
        </a>
      </div>
    @endforeach
  </main>
  <div class="center">
    <a href="{{route('comics.create')}}">Add Comic</a>
  </div>
@endsection
