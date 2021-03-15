@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
    @foreach($articles as $article)
    <div class="title">
      <h2> 
        <a href="/articles/{{$article->id}}">{{$article->title}}</a>
      </h2>
    </div>

      <p>
      <img src="images/banner.jpg" class="image image-full" alt="">
      
      </p>

      {!! $article->excerpt !!}
       
    @endforeach
	</div>
</div>
@endsection