@extends('layouts.layout')
@section('content')
<div class="content">
    <div class="title text-center m-b-md">
        <img src="/img/pizza-house.jpg" alt="pizza house logo" id="pizza-logo" width="320">
        <h1>Pizza House</h1>
    </div>
    <p class="mssg">{{ session('mssg') }}</p>
    <a href="/pizzas/create">Order a Pizza</a>
</div>
@endsection