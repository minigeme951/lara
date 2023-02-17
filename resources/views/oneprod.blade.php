@extends('layouts.app')

@section('content')
<a href="{{url('/catalog')}}">в каталог</a>
<div class="item">
    <img class='img' src="{{$produ->img}}" alt="">
    <h3 class='title'>{{$produ->name}}</h3>
    <p class='price'>{{$produ->price}}</p>
    <p>Страна производитель:{{$produ->country}}</p>
    <p>Год выпуска:{{$produ->year}}</p>
    <p>Модель:{{$produ->model}}</p>
@endsection