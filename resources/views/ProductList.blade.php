@extends('layouts.app')

@section('content')
<h3>Сортировка</h3>
<div class="div">
    <a href="{{url('/catalog')}}/sort/year/desc">по году прозводства вниз</a>
    <a href="{{url('/catalog')}}/sort/year/asc">по году прозводства вверх</a>
    <a href="{{url('/catalog')}}/sort/name/desc">по названию вверх</a>
    <a href="{{url('/catalog')}}/sort/name/asc">по названию вниз</a>
    <a href="{{url('/catalog')}}/sort/price/desc">по возростанию цены</a>
    <a href="{{url('/catalog')}}/sort/price/asc">по возростанию цены</a>
</div><br>
<h2>фильтры</h2>
<div class="filter">
    @foreach($cat as $obcat)
    <a href="{{url('/catalog')}}/filter/{{$obcat->id}}">{{$obcat->name}}</a>
    @endforeach
    <a href="{{url('/catalog')}}">сброс фильтроф</a>
</div>
<div class="list">
@foreach($produ as $pp)
<div class="item">
    <img class='img' src="{{$pp->img}}" alt="">
    <h3 class='title'>{{$pp->name}}</h3>
    <p class='price'>{{$pp->price}}</p>
    <a href="{{url('/catalog')}}/{{$pp->id}}"><button>Подробнее</button></a>
</div>
@endforeach
</div>
@endsection