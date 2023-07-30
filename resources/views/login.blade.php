@extends('app')
@section('content')
<div class="form">
    <h1>Sign in</h1>
    <form action="/login" method="post">
      @csrf
      <div class="input-center">
        <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your login">
        @error('name')
        {{ $message}}
        @enderror
        <br>
        <input type="password" name="password" placeholder="Enter a password">
        <br>
        <input type="submit" class="button" value="Login">
      </div>
    </form>
    <div class="signup">
      <span class="signup">Doesn't have an account?
        <a href="{{ route('registrationForm')}}"><label for="check">Registration</label></a>
      </span>
    </div>
  </div>
  @endsection