@extends("template")
@section("content")
<div class="container">
	<div class="col-md-4 card">
		<form action="" method="post" enctype="multipart/form-data" >
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group pt-2">
				<label for="url" class="text-center my-0 py-0"><span class="font-weight-bold"> Envoyer un fichier</span></label>
				<input type="file" name="url" id="url" class=" my-0 py-0" required="true" ><br>

				<div class="input_text">
					<label for="mail_destination" class="my-0 py-0">Envoyer à</label>
					<input type="email" name="mail_destination" id="mail_destination" placeholder="@destinataire" class="form-control my-0 py-0" required="true"><br>

					<label for="mail" class="my-0 py-0">Votre e-mail</label>
					<input type="email" name="mail" id="mail" placeholder="@votre e-mail" class="form-control my-0 py-0" required="true"><br>

					<label for="message" class="my-0 py-0">Message</label>
					<textarea name="message" id="message" class="form-control my-0 py-0" placeholder="..." rows="2" required="true" maxlength="150" ></textarea><br>
				</div>
			</div>
			<div class="form-group">
				<button class="btn">Envoyer</button>
			</div>
		</form>
	</div>
	<div class="col-md-5 col-md-offset-2 text-center">
		<p><img src="http://techpatrol.com.au/wp-content/uploads/2015/01/homepage-carousel-icon-colour-datacentre.png">
		<h1>File<span class="yellow point">.</span>Transfer</h1> 
		<p>Envoyer de gros fichiers simplement !</p>
	</div>

</div>
@endsection

