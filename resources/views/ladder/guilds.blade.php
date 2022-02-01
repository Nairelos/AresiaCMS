@inject('lib', 'App\Library\Guild')

@extends('master')

@section('title', 'Ladder guildes')

@section('content')
<div class="panel_title">
    <div>
        <h4>Classement</h4>
    </div>
</div>
<center>
	<a class="btn btn_blue" href="{{ route('ladder.exp') }}">PVM</a>
	<a class="btn btn_blue" href="{{ route('ladder.honor') }}">PVP</a>
	<a class="btn btn_blue" href="{{ route('ladder.guilds') }}">Guildes</a>
	<a class="btn btn_blue" href="{{ route('ladder.vote') }}">Vote</a>
	<a class="btn btn_blue" href="{{ route('ladder.jobs') }}">Métiers</a>
</center>
<form class="cart" method="get" action>
	<div class="quantity buttons_added">
		<select class="cart" style="width: 100%; height: 34px; padding: 3px 6px!important;" name="serveur">
			<option value="all" selected>Choisir un serveur</option>
			@foreach (config('config.servers') as $id => $server)
			<option value="{{ $id }}" @if (Request::input('serveur') == $id) selected @endif>{{ $server['name'] }}</option>
			@endforeach
		</select>
	</div>
	<br />
	<input type="submit" id="submit" value="Trier" class="btn btn_blue">
</form>
<table>
	<tbody>
		<tr>
			<th>#</th>
			<th>Nom</th>
			<th>Emblême</th>
			<th>Serveur</th>
			<th>Niveau</th>
			<th>Meneur</th>
			<th>Nb de Membre</th>
		</tr>
		@foreach ($guilds as $pos => $guild)
		<tr>
			<td>{{ $pos+1 }}</td>
			<td><a href="">{{ $guild->name }}</a></td>
			<td>{!! $lib->getEmblem($guild->emblem, 25) !!}</td>
			<td>{{ config('config.servers')[$guild->server]['name'] }}</td>
			<td>{{ $guild->lvl }}</td>
			<td>{{ App\Models\GuildMember::where('guild', $guild->id)->where('rank', 1)->first()->name }}</td>
			<td>{{ number_format($guild->members()->count(), 0, '.', ' ') }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection