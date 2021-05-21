@extends('layouts.app')

@section('main')
  <main id="index">
    @foreach ($comics as $comic)
      <div class="card">
        <a href="{{route('comics.show', ['comic' => $comic->id])}}">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h4>{{$comic->title}}</h4>
        <h5>{{$comic->series}} - <span>{{$comic->type}}</span></h5>
        <div class="text">{{$comic->description}}</div>
        <p>{{$comic->price}} €</p>
        <p>Release Date: {{$comic->sale_date}}</p>
        </a>
        <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>
        <form class="" action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" name="" value="Delete">
        </form>

      </div>
    @endforeach
  </main>
  <div class="add">
    <div class="center">
      <a href="{{route('comics.create')}}">Add Comic</a>
    </div>
  </div>
@endsection
