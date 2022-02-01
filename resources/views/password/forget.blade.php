@extends('master')

@section('title', 'Mot de passe oublié ? |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Mot de passe oublié ? Etape 1</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<form method="post" action>
		{{ csrf_field() }}
		<p>
			<label>Nom de compte</label>
			<input class="form-control" type="text" name="login" placeholder="Nom de compte" value="{{ old('login') }}">
		</p>
		<p>
			<label>Verification anti-bot</label>
			<div class="g-recaptcha" data-sitekey="{{ config('config.recaptcha.public') }}"></div>
		</p>			
		<p><center><button type="submit" class="btn btn_blue">Valider</button></center></p>
	</form>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection