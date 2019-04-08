@extends('layouts.site')
@section('content')
<!doctype html>
<html lang="en">
<main role="main">

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

<center><h3><a href="article/add">Добавить статью</a></h3></center>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
          @foreach( $articles as $art )
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $art->title }}</text></svg>
            <div class="card-body">
            <a href="{{ route('gaben', ['id' => $art->id]) }}">Посмотреть статью ></a>
            <h3>{{ $art->id }}</h3>
              <p class="card-text">{{ $art->content }}</p>
              <div>{{ $art->created_at }}</div>
              <div class="gast">{{ $art->updated_at }}</div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                  <button type="button" class="btn btn-sm btn-outline-secondary">Value1</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Value2</button>

                  <big class="minecraft">
                    <form action="{{ route('del', ['article' => $art->id]) }}" method="post">

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
        @endforeach
      </div>
    </div>
  </div>
</main>
@endsection
