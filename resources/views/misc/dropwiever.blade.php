@extends('master')

@section('title', 'Items')

@section('content')
<div class="panel_title">
    <div>
		<h4>DROPWIEVER</h4>
	</div>
</div>
<div class="widget_title">
	<div class="tb_widget_search">
		<form>
			<input type="text" placeholder="Taper le nom d'un objet">
			<input type="submit" value="Rechercher">
		</form>
	</div>
</div>
<br>
<table>
	<tbody>
		<tr>
			<th>Nom de l'équipement</th>
			<th>Nom du mob</th>
			<th>Prospection</th>
			<th>Taux</th>
		</tr>
		<tr>
			<td>Plume de Piou Bleu</td>
			<td>Piou Bleu<br>Pioustone le Problème</td>
			<td>0<br>0</td>
			<td>25 %<br>20 %</td>
		</tr>
	</tbody>
</table>
@endsection