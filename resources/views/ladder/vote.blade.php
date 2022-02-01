@extends('master')

@section('title', 'Ladder vote')

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
<table>
	<tbody>
		<tr>
			<th>#</th>
			<th>Pseudonyme</th>
			<th>Nombre de votes</th>
		</tr>
		@foreach ($accounts as $pos => $account)
		<tr>
			<td>{{ $pos+1 }}</td>
			<td><img width="30" src="{{ asset('style/img/avatar/'.$account->avatar.'.jpg') }}" /> {{ $account->pseudo }}</td>
			<td>{{ $account->votes }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection