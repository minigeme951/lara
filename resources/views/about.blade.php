@extends('layouts.app')
@section('content')
<h2 class="text-center">О нас</h2>
<div class="logo"><img src="" alt=""></div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @foreach($prod as $pp)
                  <div class="carousel-item active">
                    <img src="{{$pp->img}}" class="d-block w-100 carousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                  <h5>{{$pp->name}}</h5>
                  </div>
                  </div>
                  @endforeach
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
@endsection