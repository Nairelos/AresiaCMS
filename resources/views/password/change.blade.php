@extends('master')

@section('title', 'Mot de passe oublié ? |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Mot de passe oublié ? Etape 2</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<form method="post" action>
		{{ csrf_field() }}
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Question secrète</label>
					<input class="form-control" type="text" value="{{ $account->question }}" disabled>
				</p>
				<p>
					<label>Nouveau mot de passe</label>
					<input class="form-control" type="password" name="new_password" placeholder="Nouveau mot de passe" value="{{ old('new_password') }}">
				</p>		
			</div>
		</div>
		<div class="col col_6_of_12">
			<div id="login-form">
				<p>
					<label>Réponse secrète</label>
					<input class="form-control" type="text" name="secret_answer" placeholder="Réponse secrète" value="{{ old('secret_answer') }}">
				</p>
				<p>
					<label>Confirmer</label>
					<input class="form-control" type="password" name="conf_password" placeholder="Confirmer" value="{{ old('conf_password') }}">
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