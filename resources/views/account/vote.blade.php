@extends('master')

@section('title', 'Vote & Gagne |')

@section('content')
<div class="panel_title">
    <div>
       	<h4>Vote & Gagne</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<div class="alert_message green">
		<b>Comment pouvons-nous voter ?</b><br>
		• Il vous suffit de vous rendre sur l'adresse du lien ci-dessus et de mettre les numéros ou lettres qu'ils vous demandent.<br>
	</div>
	<figure class="wp-caption alignleft">
		<img src="{{ asset('./style/img/pictures/eni.png') }}" alt="Image" class="visible animated"/>
	</figure>
	<p>
		Voter pour <b>{{ config('config.name') }}</b> à pour but de faire progresser votre serveur et donc d'assurer son évolution.<br />
		Quand vous votez, vous verrez vos points accroître de <b>{{ config('config.points.vote') }} points</b> par vote.
	</p>
	<form method="post" action>
		{{ csrf_field() }}
		<center><button type="submit" class="btn btn_blue" onclick="window.open('http://rpg-paradize.com/?page=vote&amp;vote={{ config('config.rpg') }}');">Voter</button></center>
	</form>
</div>
@endsection