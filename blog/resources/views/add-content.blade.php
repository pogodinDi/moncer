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

@if(count($errors) > 0)

    @foreach($errors->all() as $error)
        <h6 class="alert alert-danger">{{ $error }}</h6>
    @endforeach

@endif

	<br>
	<center>
	Заполните формы:<br><br>
	<form action="{{route('article')}}" method="POST">
		<label for="title">Заголовок статьи</label><br>
		<input type="text" name="title" placeholder="Ввод..."><br><br>

		<label for="content">Текст статьи</label><br>
		<textarea name="content" cols="30" rows="8" placeholder="Ввод..."></textarea><br>

		<input type="submit" name="Оправить" value="Отправить">
        {{ csrf_field() }}
	</form>
	</center>
@endsection
