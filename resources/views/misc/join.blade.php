@extends('master')

@section('title', 'Nous rejoindre |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Télécharger</h4>
    </div>
</div>
<div class="col col_12_of_12">
	<div>
		<strong>Qu'est-ce que Dofus ? </strong>
		<div>
			<br />
			<iframe width="640" height="360" src="https://www.youtube.com/embed/3eSEb7qS06A" frameborder="0" allowfullscreen></iframe>
			<br />
			<p>DOFUS est un jeu de rôle massivement multijoueur sur Internet ou MMORPG (Massive Multiplayer Online Role Playing Game). Dans la province d'Amakna, la disparition des précieux Dofus, des oeufs de dragon, a bouleversé le quotidien d'une population hier si paisible. Tandis que des phénomènes étranges surviennent dans les forêts de la province éternelle, des centaines d'aventuriers se sont lancés à la recherche de ces oeufs aux pouvoirs magiques.</p>
		</div>
		<div class="alert_message red" jquery="">
			<p>&#x26a0; Avant toute utilisation de nos systèmes/services, nous vous invitons à lire les conditions générales d'utilisation.</p>
		</div>
		<strong>Etape N°1 : Créer un compte</strong>
		<p>
			Pour pouvoir jouer sur nos serveurs ainsi bénéficier des services du site vous devez obligatoirement créer un compte.
			<a class="btn btn_blue btn_expand" href="{{ route('account.register') }}">Créer un compte</a>
			Une fois que votre compte est créer vous pouvez passer a l'étape suivante ci-dessus.
		</p>
		<strong>Etape N°2 : Installer Dofus 1.29.1</strong>
		<p>
			Notre serveur est actuellement sous la version de Dofus 1.29.1 donc assurez-vous de posséder le client Dofus 1.29.1, si ce n'est pas le cas, il est neccésaire de l'installer sur votre ordinateur pour les prochaines étapes à suivre.
			@foreach (config('config.link.client') as $name => $link)
			<a href="{{ $link }}" class="btn btn_blue btn_expand">Télécharger le client ({{ $name }})</a>
			@endforeach
		</p>
		<strong>Etape N°3 : Uplauncher {{ config('config.name') }}</strong>
		<p>
			Pour pouvoir vous connectez sur nos serveurs de jeux, il est obligatoire et indispensable de télécharger l'uplauncher. Dans notre cas, l'uplauncher installera automatiquement tout les fichiers nécessaires pour rejoindre le serveur. Cela vous permettra de garder votre jeu à jour.
			@foreach (config('config.link.uplauncher') as $name => $link)
			<a href="{{ $link }}" class="btn btn_blue btn_expand">Télécharger l'Uplauncher ({{ $name }})</a>
			@endforeach
		</p>
		<strong>F.A.Q</strong>
		<div class="alert_message red" jquery="">
			<p><b>Un problème d'installation ?</b><br />• Nous vous invitons a vous rediriger sur le forum sans la section <u>support</u>.</p>
		</div>
		<div class="alert_message green">
			<p>Une fois les installations faite, connectez-vous puis passer un agréable moment sur nos serveurs {{ config('config.name') }}.</p>
		</div>
	</div>
</div>
@endsection