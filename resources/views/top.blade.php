@extends('layouts.layout')

@section('content')
<div class="loginPage">
  <div class="bg_pattern Polka_v2"></div>
  <div class="container1">
    <div class="loginPage_contents">
      <h1 class="h3 loginPage_contents_title">新しい家族を見つけよう</h1>
      <img src="/images/miulogo.png" style="width: 220px; margin: -380px auto 0; opacity: .8;">
      <div class="btn loginPage_contents_btn" ><a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a></div>
    </div>
  </div>
</div>
@endsection
