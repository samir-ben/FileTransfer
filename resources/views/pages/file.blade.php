@extends("template")

@section("content")
<h1>{{$title}}</h1>

{{ Form::open(array('url' => 'file')) }}
   {{  Form::text('url')}}

{{ Form::close() }}

@endsection