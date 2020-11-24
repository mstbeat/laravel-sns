@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    @include('users.user')
    @include('users.tabs', ['hasArticles' => true, 'hasLikes' => false])
    <div class="row">
      @foreach($articles as $article)
        <div class="col-sm-6">
          @include('articles.card')
        </div>
      @endforeach
    </div>
  </div>
@endsection