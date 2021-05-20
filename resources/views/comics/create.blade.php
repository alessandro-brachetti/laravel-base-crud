@extends('layouts.app')

@section('main')
  <main>
    <h1>Add your Comic</h1>
    <form class="" action="" method="post">
      <input type="text" name="title" value="" placeholder="Title">
      <input type="text" name="description" value="" placeholder="Description">
      <input type="text" name="thumb" value="" placeholder="Image">
      <input type="number" name="price" value="" placeholder="Price">
      <input type="text" name="series" value="" placeholder="Series">
      <input type="text" name="sale_date" value="" placeholder="Sell Date">
      <input type="text" name="type" value="" placeholder="Type">

      <input type="submit" name="" value="Add">
    </form>
  </main>
@endsection
