@extends('layouts.layout')

@section('content')
<div class='signinPage'>
  <div class='container'>
    <div class='userIcon'>
      <i class="fas fa-user fa-4x"></i>
    </div>
    <h2 class="title">Sign In</h2>
    <form class="form" method="POST" action="{{ route('login') }}">
    @csrf
      <div class="form-group @error('email')has-error @enderror">
      <label></label>
        <input type="email" name="email" class="form-control" placeholder="Email Address" autofocus>
        @error('email')
        <span class="errorMessage">
          {{ $message }}
        </span>
        @enderror
      </div>

      <div class="form-group @error('password')has-error @enderror">
        <label></label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        @error('password')
        <span class="errorMessage">
          {{ $message }}
        </span>
        @enderror
      </div>

      <div class="form-group text-center">
      <button type="submit" class="loginBtn">Login</button>
      </div>
      <div class="linkToLogin">
        @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}</a>
        @endif
      </div>
      <div class="linkToLogin">
        <a href="{{ route('register') }}">Create an account</a>
      </div>
    </form>
  </div>
</div>
@endsection

