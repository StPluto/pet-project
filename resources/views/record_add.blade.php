@extends('app')
@section('content')

<div class="container">
  <form action = "/create" method = "POST" class="form-group" style="width:70%; margin-left:15%;">
  @csrf
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
  <label>Description:</label>
  <input type="text" class="form-control" placeholder="Description" name="description">
  <select name="category_name">
    @foreach($categories as $category)
  <option value="{{$category->category_name}}">{{$category->category_name}}</option>
    @endforeach
  </select>
    <br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection