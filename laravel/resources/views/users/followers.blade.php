@extends('app')

@section('title', $user->name . 'のフォロワー')

@section('content')
  @include('nav')
  <div class="container pb-3">
    @include('users.user')
    <ul class="nav nav-tabs nav-justified mt-3">
      <li class="nav-item disabled">
        <span class="nav-link text-muted">
          フォロワー
        </span>
      </li>
    </ul>
    <div class="row">
      @foreach($followers as $person)
        <div class="col-sm-6">
          @include('users.person')
        </div>
      @endforeach
    </div>
  </div>
@endsection