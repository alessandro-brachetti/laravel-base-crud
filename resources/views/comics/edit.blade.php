@extends('layouts.app')

@section('main')
  <main id="create">
    <h1>Add your Comic</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
      @endif
    <form class="" action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
      @csrf

      @method('PUT')
      <input type="text" name="title" value="{{$comic->title}}" placeholder="Title">
      <input type="text" name="description" value="{{$comic->description}}" placeholder="Description">
      <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Image URL">
      <input type="number" name="price" value="{{$comic->price}}" placeholder="Price">
      <input type="text" name="series" value="{{$comic->series}}" placeholder="Series">
      <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sell Date">
      <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">

      <input type="submit" name="" value="Add">
    </form>
    <div class="links">
      <a href="{{route('home')}}">HOME</a>
      <a href="{{route('comics.index')}}">COMICS</a>
    </div>
  </main>
@endsection
