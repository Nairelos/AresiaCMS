@extends('master')

@section('title', 'Mon compte |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Mon compte</h4>
    </div>
</div>
<center>
	<a class="btn btn_blue" href="{{ route('account.manage') }}">Mes informations</a>
	<a class="btn btn_blue" href="{{ route('exchange.ogrines') }}">Bourses aux Ogrines</a>
	<a class="btn btn_blue" href="{{ route('shop.all') }}">Le Grand Bazar</a>
</center>
<center>
	<div class="col_9_of_12">
		<table>
			<tbody>
				<tr>
					<td>Nom de compte</td><td>{{ Auth::user()->account }}</td>
				</tr>
				<tr>
					<td>Mot de passe</td><td>*******</td>
				</tr>
				<tr>
					<td>Adresse e-m@il</td><td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
					<td>Pseudonyme</td><td>{{ Auth::user()->pseudo }}</td>
				</tr>
				<tr>
					<td>Nombre de vote(s)</td><td>{{ Auth::user()->votes }}</td>
				</tr>
				<tr>
					<td>Nombre de point(s)</td><td>{{ Auth::user()->points }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</center>
<div class="col col_12_of_12">
	<h1 class="page_title">Mes Personnages</h1>
	<table>
		<tbody>
			<tr>
				<th>#</th>
				<th>Pseudonyme</th>
				<th>Niveau</th>
				<th>Alignement</th>
				<th>Serveur</th>
			</tr>
			@foreach ($players as $player)
			<tr>
				<td><img src="{{ asset('style/img/persos/race/heads/'.$player->class.'_'.$player->sexe.'.png') }}" /></td>
				<td><a href="">{{ $player->name }}</a></td>
				<td>{{ $player->level }}</td>
				<td><img src="{{ asset('style/img/persos/align/'.$player->alignement.'.png') }}" /></td>
				<td>{{ config('config.servers')[$player->server]['name'] }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="col col_12_of_12">
	<h1 class="page_title">Changer mon mot de passe</h1>
	<div id="login-form">
	<form method="post" action>
		{{ csrf_field() }}
		<p>
			<label>Ancien mot de passe</label>
			<input class="form-control" name="old_password" value="{{ old('old_password') }}" type="password" placeholder="Ancien mot de passe">
		</p>
		<p>
			<label>Question secrète</label>
			<input class="form-control" value="{{ Auth::user()->question }}" disabled>
		</p>
		<p>
			<label>Réponse secrète</label>
			<input class="form-control" name="secret_answer" value="{{ old('secret_answer') }}" type="text" placeholder="Réponse secrète">
		</p>
		<p>
			<label>Nouveau mot de passe</label>
			<input class="form-control" name="new_password" value="{{ old('new_password') }}" type="password" placeholder="Nouveau mot de passe">
		</p>
		<p>
			<label>Confirmer</label>
			<input class="form-control" name="conf_password" value="{{ old('conf_password') }}" type="password" placeholder="Confirmer">
		</p>
		<p><center><button type="submit" class="btn btn_blue">Valider</button></center></p>
	</form>
	</div>
</div>
@endsection