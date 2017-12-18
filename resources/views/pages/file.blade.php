@extends("template")
@section("content")
<style>
.outer-div {
  position: absolute; /* postulat de départ */
  top: 50%; left: 50%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
}
 </style>
<div class="outer-div">
	<h1 class="text-center" style="font-size: 1.5em">{{$title}}</h1>
	 
	   {{ Form::open(array('url' => 'file')) }}
	   {{  Form::text('url')}}
	   {{  Form::submit('Télécharger') }}

	{{ Form::close() }}
</div>
@endsection