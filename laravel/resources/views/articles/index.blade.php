@extends('app')

@section('title', '記事一覧')

@section('content')
  @include('nav')
  <div class="container">
    <div class="row">
      @foreach($articles as $article)
        <div class="col-sm-6">
          @include('articles.card')
        </div>
      @endforeach
    </div>
  </div>
@endsection