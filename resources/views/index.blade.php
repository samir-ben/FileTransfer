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
					<input type="email" name="mail_destination" id="mail_destination" placeholder="@" class="form-control my-0 py-0" required="true"><br>

					<label for="mail" class="my-0 py-0">Votre e-mail</label>
					<input type="email" name="mail" id="mail" placeholder="@" class="form-control my-0 py-0" required="true"><br>

					<label for="message" class="my-0 py-0">Message</label>
					<textarea name="message" id="message" class="form-control my-0 py-0" placeholder="..." rows="2" required="true" ></textarea><br>
				</div>

			</div>
			<div class="form-group">
				<button class="btn">Raccourcir</button>
			</div>
		</form>
	</div>
	<div class="col-md-5 col-md-offset-2">
		<h1>File<span class="yellow point">.</span>Transfer</h1> 
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

</div>

@endsection

