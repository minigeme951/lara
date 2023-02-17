@extends('layouts.app')

@section('content')
@foreach ($prod as $obprod)
<h2>{{$obprod->name}}</h2>
<img src="{{$obprod->img}}" alt="">
<h4>цена:{{$obprod->price}}руб</h4>
<h4>стрнана изготовитель:{{$obprod->country}}</h4>
<h4>год производства:{{$obprod->year}}</h4>
<h4>модель:{{$obprod->model}}</h4>
@endforeach
@endsection