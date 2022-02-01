@extends('master')

@section('title', 'Bourse aux Kamas')

@section('content')
<div class="panel_title">
    <div>
        <h4>Bourse aux kamas</h4>
    </div>
</div>
<div class="alert_message grey">
	<p><b>Qu'est-ce que c'est ?</b> : La bourse aux kamas est un système de kamas en vente contre des ogrines que vous pourrez utiliser sur le serveur.<br>Vous pouvez également vendre des kamas pour obtenir des ogrines, sachant que 1 000 kamas est repris pour 1 Ogrines.</p>
</div>
<table>
   	<tbody>
        <tr>
            <th>Offre</th>
            <th>Kamas</th>
			<th>Prix</th>
			<th>Disponible</th>
			<th>Acheter</th>
        </tr>
		<tr>
            <td>1</td>
			<td>25 000 <img src="{{ asset('style/img/icones/kamas.png') }}"></td>
			<td>40 <img src="{{ asset('style/img/icones/ogrines.png') }}"></td>
			<td>Oui</td>
			<td><a href="">Acheter</a></td>
        </tr>
	</tbody>
</table>
@endsection