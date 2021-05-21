@extends('layouts.app')

@section('main')
  <main id="create">
    <h1>Add your Comic</h1>
    <form class="" action="{{route('comics.store')}}" method="post">
      @csrf

      @method('POST')
      <input type="text" name="title" value="" placeholder="Title">
      <input type="text" name="description" value="" placeholder="Description">
      <input type="text" name="thumb" value="" placeholder="Image URL">
      <input type="number" name="price" value="" placeholder="Price">
      <input type="text" name="series" value="" placeholder="Series">
      <input type="text" name="sale_date" value="" placeholder="Sell Date">
      <input type="text" name="type" value="" placeholder="Type">

      <input type="submit" name="" value="Add">
    </form>
    <div class="links">
      <a href="{{route('home')}}">HOME</a>
      <a href="{{route('comics.index')}}">COMICS</a>
    </div>
  </main>
@endsection
