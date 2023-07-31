@extends('app')
@section('content')
<div class="form">
    <h1>Sign in</h1>
    <form action="/login" method="post">
      @csrf
      <div class="input-center">
        <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your login" required>
        <br>
        <input type="password" name="password" placeholder="Enter a password" required>
        <br>
        <input type="submit" class="button" value="Login">

        @error('name')
        <div class="error-msg">{{ $message}}</div>
        @enderror
      </div>
    </form>
    <div class="signup">
      <span class="signup">Doesn't have an account?
        <a href="{{ route('registrationForm')}}"><label for="check">Registration</label></a>
      </span>
    </div>
  </div>
  @endsection