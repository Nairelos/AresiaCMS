@inject('lib', 'App\Library\Staff')

@extends('master')

@section('title', 'L\'équipe du serveur |')
<link rel="stylesheet" href="{{ asset('style/css/ankama.css') }}">
@section('style')

@endsection

@section('content')
<div class="panel_title">
    <div>
        <h4>L'équipe du serveur</h4>
    </div>
</div>
<div class="alert_message green" jquery="">
	<b>Comment contacter un membre de l'équipe ?</b><br>
	• Pour être en contact avec un membre de l'équipe il vous suffit de taper ceci dans le canal général "/w [PSEUDO] [TEXTE]", dès la réception de votre message nous traiterons votre demande dans les plus brefs délai.<br>
</div>
<div class="alert_message red" jquery="">
	&#x26a0; Veuillez ne pas flood un membre de l'équipe s'il ne répond pas à votre demande, ils sont peut-être déjà occupés par une autre demande, donc soyez patient et attendez votre tour.
</div>
@foreach ($staffs as $cat => $members)
<h5>{{ $lib->getCategory($cat) }}</h5>
<table class="ak-server-list ak-list-perso">
    <tbody>
        <tr>
            <th>Pseudonyme</th>
            <th>Connecté</th>
			<th>Serveur</th>
        </tr>
        @foreach ($members as $member)
        @php
        $logged = ($member->account->logged) ? true : false ;
        @endphp
        <tr>
            <td><img width="35" src="{{ asset('style/img/avatar/'.$member->avatar.'.jpg') }}" /> <a>{{ $member->name }}</a></td>
            <td class="statut @if ($logged) statut_on @else statut_off @endif"><span></span><font color="@if ($logged) green @else red @endif">@if ($logged) Connecté @else Déconnecté @endif</font></td>
            @if ($member->server != 0)
			<td class="server server_{{ $member->server }}"><span></span>{{ config('config.servers')[$member->server]['name'] }}</td>
            @else
            <td></td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endforeach
@endsection