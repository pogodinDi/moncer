@extends('layouts.site')
@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">{{ $header }}</h1>
    <p class="lead text-muted">{{ $message }}</p>
    <p>
      <a href="/page" class="btn btn-primary my-2">Главное меню</a>
      <a href="/" class="btn btn-secondary my-2">Страница фреймворка laravel</a>
    </p>
  </div>
</section>
@if($article)
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $article->title }}</text></svg>
            <div class="card-body">
                <a href="/page" class="minecraft"> < назад </a>
              <p class="card-text">{{ $article->content }}</p>
              <div>{{ $article->created_at }}</div>
              <div class="gast">{{ $article->updated_at }}</div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                  <button type="button" class="btn btn-sm btn-outline-secondary">Value1</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Value2</button>

                  <big class="minecraft">
                    <form action="{{ route('del', ['article' => $article->id]) }}" method="post">

                        <!-- <input type="hidden", name="_method", value="DELETE"> -->
                        {{method_field('DELETE')}}
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-danger">
                            Удалить
                        </button>
                    </form>
                  </big>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection
