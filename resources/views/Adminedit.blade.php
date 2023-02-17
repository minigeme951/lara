@extends('layouts.app')
@section('content')
<h2>товары</h2>
<div class="table">
@foreach($prod as $obprod)
    <div class="item">
        <h3>{{$obprod->name}}</h3>
        <p>{{$obprod->price}}</p>
        <a href="{{url('/admin/item/del')}}/{{$obprod->id}}">удалить</a>
    </div>
@endforeach
</div>
<h1>Категории</h1>
<div class="table">
    @foreach($cat as $obcat)
    <div class="item">
    <h3>{{$obcat->name}}</h3>
    <a href="{{url('/admin/cat/del')}}/{{$obcat->id}}">удалить</a>
    </div>
    @endforeach
</div>
<a href="{{url('/admin/cat')}}">создать категорию</a>
@endsection