<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Record | Add</h2>
  <br>
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

</body>
</html>