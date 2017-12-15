@extends("template")

@section("content")
<h1>{{$title}}</h1> 

<form action="" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="url">Fichier</label>
		<input type="file" name="url" id="url" placeholder="" class="form-control" required="true"><br>

		<!-- <label for="url">Lien</label>
		<input type="text" name="url" id="url" placeholder="http://..." class="form-control"> -->

		<label for="mail_destination">Mail de destination</label>
		<input type="email" name="mail_destination" id="mail_destination" placeholder="@" class="form-control" required="true"><br>

		<label for="mail">Votre email</label>
		<input type="email" name="mail" id="mail" placeholder="@" class="form-control" required="true"><br>

		<label for="message">Message</label>
		<textarea name="message" id="message" class="form-control" placeholder="..." rows="3" required="true">Message</textarea><br>

		<!-- <label for="path_file">path_file</label>
		<input type="text" name="path_file" id="path_file" placeholder="...." class="form-control"><br> -->
	</div>

	<div class="form-group">
		<button class="btn btn-primary">Raccourcir</button>
	</div>

	<a href="uploads/s6j7kJgaQyWk2XcKq1qzAft3xBxvPEFZ17HdZEro.jpeg" download="">Download</a>

</form>

@endsection