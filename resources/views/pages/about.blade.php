@extends("template")

@section("content")
<style>
.outer-div {
  position: absolute; /* postulat de départ */
  top: 50%; left: 50%; /* à 50%/50% du parent référent */
  transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
}
h1 {
	padding-left: 10px !important;
}
img {
	margin-top: -150px;
	filter: invert(100%);
}



 </style>
 <div class="container">
<h1>{{$title}}</h1>
	<div class="col-md-12">
		<p>Application créée pour l'envoi de gros fichiers sur un modèle se rapprochant du site "Wetransfer". <br>
		C'est un site libre, conçu dans une optique pédagogique. Vous pouvez via les liens ci-dessous contacter l'auteur du site et visionner le code de l'application.</p>
	</div>
	<div class="outer-div">
		<div class="col-md-4">
			<a href="http://www.samirbendaoud.com" target="_blank"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Globe_icon.svg/600px-Globe_icon.svg.png" alt="logo site web" width="100"></a>
		</div>

		<div class="col-md-4">
			<a href="https://github.com/samir-ben/wetransfer" target="_blank"><img src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="logo  github" width="100"></a>
		</div>

		<div class="col-md-4">
			<a href="https://www.linkedin.com/in/samir-bendaoud-128290153" target="_blank"> <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/LinkedinBlack.png" alt="logo linkedin" width="100"></a>
		</div>
	</div>
</div>
<hr>

@endsection