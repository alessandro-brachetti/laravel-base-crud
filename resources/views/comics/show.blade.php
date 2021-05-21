@extends ('layouts.app')

@section('main')
<div id="detail">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h5>{{$comic->series}} - <span>{{$comic->type}}</span></h5>
    <p>{{$comic->description}}</p>
    <p>{{$comic->price}} €</p>
    <p>Release Date: {{$comic->sale_date}}</p>

    <a href="{{route('home')}}">HOME</a>
    <a href="{{route('comics.index')}}">COMICS</a>
    <a href="{{route('comics.edit', ['comic' => $comic->id])}}">EDIT</a>
    <form class="" action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" name="" value="Delete">
    </form>



</div>

@endsection
