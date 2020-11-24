@extends('app')

@section('title', $tag->hashtag)

@section('content')
  @include('nav')
  <div class="container">
    <div class="card mt-3">
      <div class="card-body">
        <h2 class="h4 card-title m-0">{{ $tag->hashtag }}</h2>
        <div class="card-text text-right">
          {{ $tag->articles->count() }}件
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($tag->articles as $article)
        <div class="col-sm-6">
          @include('articles.card')
        </div>
      @endforeach
    </div>
  </div>
@endsection