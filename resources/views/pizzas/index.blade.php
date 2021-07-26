@extends('layouts.layout')
@section('content')
<div class="content">
 <div class="title text-center m-b-md">
  <h1>Pizzas List</h1>
 </div>
 @foreach($pizzas as $pizza)
 <div class="container text-center">
  {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
 </div>
 @endforeach
</div>
@endsection