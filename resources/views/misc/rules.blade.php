@extends('master')

@section('title', 'Règles et Sanctions |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Règles et Sanctions</h4>
    </div>
</div>
<figure class="wp-caption alignright">
	<img src="{{ asset('style/img/pictures/rule.png') }}" alt="Image" class="visible animated"/>
</figure>
<p>
	En vous inscrivant sur DOFUS, vous vous engagez à respecter un certain nombre de règles. Ces règles sont là pour maintenir une ambiance conviviale et optimiser le confort de jeu de chaque joueur sur nos serveurs. Dans le cas où un joueur choisit de contrevenir à ces règles, il doit savoir qu'il s'expose à des sanctions. Selon les cas et leur gravité, la sévérité des sanctions varie. Ci-dessous, les différents types de sanctions qui existent sur DOFUS.
</P>
<div class="alert_message red">
	Dans le cas où un joueur contrevient à ces règles, il doit savoir qu'il s'expose à des sanctions. Selon les cas et leur gravité, la sévérité des sanctions varie.
</div>
<div>
	<h3>➲ <b>L'avertissement</b></h3>
</div>
<p>
	Pour certaines infractions, un avertissement est donné au joueur pour l'informer des règles et le prévenir qu'il risque une sanction. Cette mise en garde est envoyée directement en jeu par les modérateurs ou par mail de la part d'Ankama. Elle n'expire pas et est considérée comme lue et comprise par le joueur.
</p>
<div>
	<h3>➲ <b>Le mute</b></h3>
</div>
<p>
	La privation de parole est une des sanctions appliquées par les modérateurs à l'encontre des joueurs qui ne respectent pas les règles de DOFUS. Elle peut être accompagnée d'une demande de suspension de compte auprès du Support.
</p>
<div>
	<h3>➲ <b>Le kick</b></h3>
</div>
<p>
	L'expulsion du jeu pour un temps donné est appliquée par les modérateurs pour les plus graves cas. Elle est généralement accompagnée d'une demande de suspension de compte auprès du Support.
</p>
<div>
	<h3>➲ <b>La suspension temporaire</b></h3>
</div>
<p>
	Le compte est inaccessible durant plusieurs jours (3, 7, 15 ou 30 jours). Cette suspension provisoire, appliquée par le Support, est une étape qui précède parfois le bannissement définitif du compte DOFUS. Sa durée dépend de la gravité de la faute et de la récidive.
</p>
<div>
	<h3>➲ <b>La suspension définitive</b></h3>
</div>
<p>
	Le compte est fermé définitivement, le joueur ne peut plus y accéder. Cette sanction est généralement appliquée dans les cas de joueurs récidivistes ou de manquement impardonnable aux règles de DOFUS.

	La sévérité d'une sanction dépend du niveau de gravité de l'infraction commise. De manière générale, plusieurs avertissements conduisent à un bannissement et plusieurs bannissements conduisent à une exclusion définitive. Cependant, certaines infractions donnent directement lieu à un bannissement définitif. De même, la récidive à une infraction mène elle aussi à une exclusion ferme.
</p>
<div class="alert_message blue">Liste non exhaustive des règles de bonne conduite à respecter impérativement</div>
<div>
	<h3>➲ <b>Comptes, personnages, noms et pseudos</b></h3>
</div>
<p>
	Les pseudos de comptes, de personnages et les noms de guildes doivent respecter les règles suivantes :
</p>
<ul>
	<li>Correspondre à un mot prononçable (par exemple le mot ssdfzxjf ne respecte pas cette règle)</li>
	<li>Ne pas faire référence à une orientation politique, à une ethnie, une communauté ou une religion</li>
	<li>Ne pas être vulgaires ni insultants</li>
	<li>Ne pas comporter de connotation sexuelle voire pornographique</li>
	<li>Ne pas contenir votre nom et/ou prénom</li>
	<li>Ne pas imiter une marque déposée</li>
	<li>Ne pas faire référence à un produit stupéfiant ou à toute autre entité interdite par la législation</li>
	<li>Ne pas suggérer des pratiques interdites par les règles du jeu</li>
	<li>Ne pas imiter les noms de personnages du Background de DOFUS (personnages non joueurs, héros de l'histoire...)</li>
	<li>Ne pas imiter le nom d'un modérateur ou d'un membre de la Société</li>
	<li>Ne pas être orthographié ou épelé alternativement dans le but de contourner les règles imposées ci-dessus.</li>
</ul>
<p>
	Il est interdit de prêter son compte, en raison des divers abus possibles (utilisation du compte prêté pour commettre des infractions, vols...). En cas de manquement à cette règle, les deux protagonistes (prêteur et receveur) encourent des sanctions.

	La vente, l'achat, l'échange et le don de comptes sont interdits. Les comptes sont la propriété d'Ankama et, à ce titre, aucun profit pécuniaire, que ce soit en monnaie réelle ou virtuelle (kamas), ne peut en être tiré. De plus, un compte est associé à des données personnelles qu'il est imprudent de divulguer. Le propriétaire originel du compte reste toujours responsable des actions de son personnage. Il peut être poursuivi pénalement dans le cas d'actions graves effectuées avec son compte.
</p>
<div>
	<h3>➲ <b>Canaux de discussion</b></h3>
</div>
<ul>
	<li>Le flood, consistant à répéter le même message plusieurs fois dans un court délai, n'est pas autorisé.</li>
	<li>Le commerce à la criée (sur le canal commun de couleur noire) est interdit en dehors des maps marchandes*. Il est considéré comme du flood.</li>
	<li>Le recrutement à la criée est également prohibé.</li>
	<li>Chaque canal a sa fonction. Celle-ci est indiquée lorsque l'on passe la souris sur la case à cocher pour activer/désactiver ledit canal. Il est défendu d'utiliser un canal à mauvais escient.</li>
	<li>Il est interdit d'abuser de caractères spéciaux, de mettre en valeur son message en l'écrivant en majuscules, en répétant un caractère de manière à attirer l'attention, ou encore d'utiliser le symbole @ ou tout autre caractère permettant d'afficher le message automatique de mise en garde contre les sites dangereux « Attention ».</li>
	<li>Il est interdit de faire de la publicité pour un site tiers, y compris ceux en rapport avec DOFUS.</li>
</ul>
<div>
	<h3>➲ <b>Animations</b></h3>
</div>
<ul>
	<li>L'organisation, sans autorisation, de loteries faisant appel à la générosité des joueurs pour la constitution des lots est interdite, le risque de vol ou d'arnaque étant trop élevé.</li>
	<li>Il est interdit d'organiser des rassemblements n'ayant pour but que de créer un mouvement de foule, ceci afin de maintenir la stabilité des serveurs DOFUS et la qualité de jeu qui en découle.</li>
</ul>
<div>
	<h3>➲ <b>Respect des autres joueurs</b></h3>
</div>
<ul>
	<li>Des propos corrects sont exigés, ceci dans le but de conserver une ambiance conviviale sur les serveurs. La vulgarité, les insultes, les discours racistes, xénophobes, homophobes, sexuels et plus généralement tous les propos déplacés sont interdits.</li>
	<li>Hormis Oto-Mustam et Aermyne, à chaque serveur est associée une langue. Il est demandé d'utiliser uniquement celle-ci sur les canaux publics. Vous êtes toutefois libre de parler dans une autre langue en privé.</li>
	<li>Les arnaques sont prohibées. Il n'est jamais agréable de se rendre compte que l'on a été abusé de quelque manière que ce soit. À ce titre, toutes les arnaques constatées directement en jeu par les modérateurs seront sanctionnées.</li>
	<li>L'usurpation d'identité est interdite, que ce soit celle d'un joueur, d'une guilde, d'un modérateur, ou d'un membre d'Ankama, et ce peu importe l'intention (qu'elle soit bonne ou mauvaise).</li>
	<li>Dévoiler les informations personnelles d'un autre joueur est prohibé.</li>
	<li>De manière générale, il est interdit de nuire au bon déroulement du jeu des autres joueurs.</li>
</ul>
<div>
	<h3>➲ <b>Commerce</b></h3>
</div>
<ul>
	<li>Sont interdits :<br>
- le commerce de comptes, de guildes, d'alignement,<br>
- le commerce d'abonnement et de kamas en dehors des marchés aux ogrines et aux kamas,<br>
- le commerce interserveur.</li>
<li>Il est illégal de vendre des ressources à des prix exorbitants dans le but de conserver ou de monnayer une place en mode marchand. En dehors des places marchandes, un joueur n'a droit au maximum qu'à un mode marchand actif par carte.</li>
</ul>
<div>
	<h3>➲ <b>Triche</b></h3>
</div>
<ul>
	<li>Il est illégal d'abuser d'un bug du jeu. Toute anomalie doit être reportée au Support dans la section correspondante.</li>
	<li>L'utilisation d'un programme tiers (communément appelé ''bot'') est interdite.</li>
	<li>La création, l'utilisation ou la promotion d'un serveur privé DOFUS est prohibée.</li>
	<li>La modification du client DOFUS est interdite. Ceci englobe tous les fichiers présents dans le répertoire d'installation de DOFUS.</li>
	<li>Utiliser son personnage pour bloquer ou rendre difficile l'accès à un PNJ, un plot de changement de carte ou à tout point normalement accessible en jeu est interdit.</li>
</ul>
<p>
	es modérateurs sont les garants du respect de ces règles en jeu. Ils ne constituent en aucun cas un palliatif au <a href="{{ config('config.link.forum') }}">Support</a>. Le non-respect des règles énoncées ci-dessus vous expose à des sanctions immédiates et/ou différées pouvant se traduire par des avertissements individuels ou de groupe. Ceux-ci peuvent aboutir à une exclusion définitive de vos comptes.
	</p>
@endsection