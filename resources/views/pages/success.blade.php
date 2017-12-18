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
	<h1 class="text-center" style="font-size: 1.5em">Fichier envoyé</h1>
	<p>Votre destinataire va recevoir par e-mail un lien pour télécharger le fichier.</p>
	<!-- <p>
		<a class="btn btn-primary" href="{{ action('PagesController@show', ['id' => $link->id]) }}">
		{{ action('PagesController@show', ['id' => $link->id]) }}
		</a>
	</p> -->
</div>
@stop