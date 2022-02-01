@extends('master')

@section('title', 'Statut des serveurs |')

@section('style')
<link rel="stylesheet" href="{{ asset('style/css/ankama.css') }}">
@endsection

@section('content')
<div class="panel_title">
   	<div>
		<h4>Statut des serveurs</h4>
	</div>
</div>
<table class="ak-server-list">
    <tbody>
        <tr>
            <th>Statut</th>
            <th>Nom du serveur</th>
            <th>Type</th>
			<th>Joueurs</th>
        </tr>
        @foreach (config('config.servers') as $id => $server)
        <tr>
            <td class="statut @if ($server['on']) statut_online @else statut_offline @endif"><span></span><font color="@if ($server['on']) green @else red @endif">@if ($server['on']) En ligne @else Hors ligne @endif</font></td>
			<td class="server server_{{ $id }}"><span></span>{{ $server['name'] }}</td>
			<td>{{ $server['type'] }}</td>
			<td>{{ App\Models\Player::where('server', $id)->count() }}</td>
        </tr>
     	@endforeach
    </tbody>
</table>
@endsection