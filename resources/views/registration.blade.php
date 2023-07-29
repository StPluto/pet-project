@extends('app')
@section('content')
<div class="form">
  <header>Sign up</header>
  @foreach($errors->all() as $message)
  <p> Error : {{ $message }}</p>
  @endforeach
  <form action="/registration" method="post">
    @csrf
    <div class="input-center">
      <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your login">
      <input type="text" name="email" value="{{old('email')}}" placeholder="Enter your email">
      <input type="password" name="password" placeholder="Create a password">
      <input type="password" name="password_confirmation" placeholder="Confirm your password">
      <input type="submit" class="button" value="Signup">
    </div>
  </form>
  <div class="signup">
    <span class="signup">Already have an account?
      <a href="{{ route('loginForm')}}"><label for="check">Login</label></a>
    </span>
  </div>
</div>

@endsection