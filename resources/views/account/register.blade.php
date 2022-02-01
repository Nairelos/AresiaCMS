@extends('master')

@section('title', 'Créer un compte |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Créer un compte</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<div class="alert_message red" jquery="">
		<p>
			&#x26a0; Tout les champs doivent être remplis pour valider l'inscription.
		</p>
	</div>
	<form method="post" action>
		{{ csrf_field() }}
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Nom de compte</label>
					<input class="form-control" type="text" name="login" placeholder="Nom de compte" value="{{ old('login') }}">
				</p>
				<p>
					<label>Adresse E-m@il</label>
					<input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
				</p>
				<p>
					<label>Question secrète</label>
					<input class="form-control" type="text" name="secret_question" placeholder="Question secrète" value="{{ old('secret_question') }}">
				</p>
				<p>
					<label>Verification anti-bot</label>
					<div class="g-recaptcha" data-sitekey="{{ config('config.recaptcha.public') }}"></div>
				</p>			
			</div>
		</div>
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Pseudonyme</label>
					<input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('pseudo') }}">
				</p>
				<p>
					<label>Mot de passe</label>
					<input class="form-control" type="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}">
				</p>
				<p>
					<label>Réponse secrète</label>
					<input class="form-control" type="text" name="secret_answer" placeholder="Réponse secrète" value="{{ old('secret_answer') }}">
				</p>
			</div>
		</div>
		<div class="col col_12_of_12">
			<p><center><button type="submit" class="btn btn_blue">Valider</button></center></p>
		</div>
	</form>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection