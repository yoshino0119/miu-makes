@extends('layouts.layout')

@section('content')
<div class="emailPage">
    <div class="container">
        <div class='userIcon'>
            <i class="fa-solid fa-envelope fa-4x"></i>
        </div>
        <h2 class="title">Password Reset</h2>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                    <form method="POST" class="form" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group @error('email')has-error @enderror">
                            <label></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                            <div class="form-group text-center">
                                <button type="submit" class="resetBtn">Send Password Reset Link</button>
                            </div>

                            <div class="linkToLogin">
                                <a href="{{ route('login') }}">Sign In</a>
                            </div>
                    </form>
            
    </div>
</div>
@endsection