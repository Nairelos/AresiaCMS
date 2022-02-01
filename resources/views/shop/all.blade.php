@inject('lib', 'App\Library\Item')

@extends('master')

@section('title', 'Le Grand Bazar |')

@section('content')
<div class="panel_title">
    <div>
        <h4>Le Grand Bazar</h4>
    </div>
</div>
<form class="woocommerce-ordering" method="get" action>
    <select name="cat" class="orderby">
        <option value="all" selected>Choisir une catégorie</option>
        @foreach ($shopCategories as $cat)
        <option value="{{ $cat }}" @if (Request::input('cat') == $cat) selected @endif>{{ $lib->getCategory($cat) }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn_blue">Valider</button>
</form>
<ul class="products">
	@foreach ($items as $pos => $item)
	@php
	$pos++;
	@endphp
    <li class="{{ ($pos%4 == 0) ? 'product' : 'product' }}">
        <div class="item_thumb">
            <h3><a href="{{ route('shop.object', [$item->id, str_slug($item->name)]) }}">{{ $item->name }}</a></h3>
            <div class="images">
        <img src="{{ asset('style/img/items_PNG/'.$item->id.'.png') }}" width="60px" height="60px"/>
    </div>
        </div>
        <div class="info">
            <span class="price">
                <ins><span class="amount">{{ $item->points }}</span> <img src="{{ asset('style/img/icones/ogrines.png') }}"></ins>
            </span>
        </div>
        <a href="{{ route('shop.object', [$item->id, str_slug($item->name)]) }}" class="btn">Acheter</a>
    </li>
    @endforeach
</ul>
@include('pagination', ['paginator' => $items])
@endsection