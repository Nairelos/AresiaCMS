@inject('lib', 'App\Library\Item')

@extends('master')

@section('content')

<div class="panel_title">
    <div>
        <h4>Recherche</h4>
    </div>
</div>
<table class="table_black">

    <thead>
        <tr>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apparance</font></font></th>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom</a></font></font></th>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catégorie</font></font></th>
            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Niveau</font></font></th>
        </tr>
    </thead>
    <tbody> 
    @foreach ($items as $pos => $item)
    @php
    $pos++;
    @endphp
        <tr>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><img style="height: 48px; width: 48px" src="{{ asset('style/img/items_PNG/'.$item->id.'.png') }}"/></font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="{{ route('encyclopedie.object', [$item->id, str_slug($item->name)]) }}">{{ $item->name }}</a></font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $lib->getCategory($item->type) }}</font></font></td>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item->level }}</font></font></td>
        </tr>
    <tbody>
    @endforeach
</table>
@include('pagination', ['paginator' => $items])
@endsection