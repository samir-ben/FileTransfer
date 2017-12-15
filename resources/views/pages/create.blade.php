@extends("template")

@section("content")
<h1>Raccourcir un lien</h1> 

<form action="" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="url">Lien</label>
		<input type="text" name="url" id="url" placeholder="http://..." class="form-control">

		<label for="mais_destination">Mail de destination</label>
		<input type="text" name="mais_destination" id="mais_destination" placeholder="@" class="form-control">

		<label for="mail">Votre email</label>
		<input type="text" name="mail" id="mail" placeholder="@" class="form-control">

		<label for="message">Message</label>
		<input type="text" name="message" id="message" placeholder="Message..." class="form-control">

		<label for="path_file">path_file</label>
		<input type="text" name="path_file" id="path_file" placeholder="...." class="form-control">
	</div>

	<div class="form-group">
		<button class="btn btn-primary">Raccourcir</button>
	</div>

</form>

@stop