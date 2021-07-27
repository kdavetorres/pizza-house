@extends('layouts.app')
@section('content')
<div class="container">
    <div class="content">
        <div class="title text-center m-b-md">
            <img src="/img/pizza-house.jpg" alt="pizza house logo" id="pizza-logo" width="200">
            <h1>The North's Best Pizza</h1>
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection