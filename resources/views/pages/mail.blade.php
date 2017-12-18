<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<div class="jumbotron">
  <h1 class="display-3">Bonjour!</h1>
  <p class="lead">Vous avez reçu un lien pour téléchager un fichier de la part de : {{$from}}</p>
  <hr class="my-4">
  <p>Message:<br>
{{$text}}</p>

Lien:<br>
<i style="color: blue;">{{$url}}</i>
  <p class="lead">
    <p>Copiez le lien ci-dessus et rendez-vous dans l'onglet <a href="{{URL::to('/')}}/file" target="_blank"><strong> Téléchargement</strong></a> pour récupérer votre fichier.</p>
  </p>
</div>
