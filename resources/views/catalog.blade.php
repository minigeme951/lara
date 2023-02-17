@extends('layouts.app')

@section('content')
<div class="sort">
    <a href="{{url('/catalog/sort')}}/name/asc">Имя по убыванию</a>
    <a href="{{url('/catalog/sort')}}/name/desc">Имя по возрастанию</a>
    <a href="{{url('/catalog/sort')}}/id/asc">От старых товаров к новым</a>
    <a href="{{url('/catalog/sort')}}/id/desc">От новых к старым</a> 
</div>
<div class="filter">
    @foreach($cat as $obcat)
    <a href="{{url('/catalog/filter')}}/{{$obcat->id}}">{{$obcat->name}}</a>
    @endforeach
</div>
<div class="reset">
    <a href="{{url('/catalog')}}">сброс фильторов</a>
</div>
<div class="items">
    @foreach($prod as $obprod)
    <a href="{{url('/catalog/one')}}/{{$obprod->id}}">
    <div class="item">
        <img class="w-50" src="{{$obprod->img}}" alt="">
        <h4>{{$obprod->name}}</h4>
        <p>{{$obprod->price}}</p>
    </div>
    </a>
    @endforeach
</div>
@endsection