@extends ('layouts.app')

@section('main')
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h5>{{$comic->series}} - <span>{{$comic->type}}</span></h5>
    <p>{{$comic->description}}</p>
    <p>{{$comic->price}} €</p>
    <p>Release Date: {{$comic->sale_date}}</p>

    <div class="">
      <a href="{{route('comics.index')}}">Comics</a>
    </div>
    <div class="">
      <a href="{{route('home')}}">HOME</a>  
    </div>
@endsection
