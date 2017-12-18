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


@endsection