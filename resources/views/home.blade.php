@extends('layouts.layout')

@section('content')

<div class="topPage">
  <nav class="nav">
    <ul>
      <li class="personIcon">
        <a href="/users/show/{{Auth::id()}}"><i class="fas fa-user fa-3x"></i></a></li>
      <li class="messageIcon"><a href="{{route('matching')}}"><i class="fas fa-3x fa-comments"></a></i></li>
    </ul>
  </nav>
  <div id="tinderslide">
    <ul>
        @foreach($users as $user)
        <li data-user_id="{{ $user->id }}">
          <div class="userName">{{ $user->name }}</div>
          <img src="/storage/images/{{ $user->img_name}}">
          <div class="like"></div>
          <div class="dislike"></div>
        </li>
        @endforeach
    </ul>
    <div class="noUser">近くにお相手がいません。</div>
  </div>
  <div class="actions" id="actionBtnArea">
      <a href="#" class="dislike"><i class="fas fa-times fa-2x"></i></a>
      <a href="#" class="like"><i class="fas fa-heart fa-2x"></i></a>
  </div>
</div>


<script>
  var usersNum = {{ $usersCount }};
  var from_user_id = {{ $from_user_id }};
</script>

@endsection