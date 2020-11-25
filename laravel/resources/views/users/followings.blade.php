@extends('app')

@section('title', $user->name . 'のフォロー中')

@section('content')
  @include('nav')
  <div class="container pb-3">
    @include('users.user')
    <ul class="nav nav-tabs nav-justified mt-3">
      <li class="nav-item disabled">
        <span class="nav-link text-muted">
          フォロー中
        </span>
      </li>
    </ul>
    <div class="row">
      @foreach($followings as $person)
        <div class="col-sm-6">
          @include('users.person')
        </div>
      @endforeach
    </div>
  </div>
@endsection