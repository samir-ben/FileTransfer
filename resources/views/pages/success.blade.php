@extends("template")

@section("content")
<h1>Bravo!</h1> 

<p>
	<a class="btn btn-primary" href="{{ action('PagesController@show', ['id' => $link->id]) }}">

	{{ action('PagesController@show', ['id' => $link->id]) }}

	</a>
</p>

@stop