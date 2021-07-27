@extends('layouts.layout')
@section('content')
<div class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                @endguest
            </ul>
        </div>
    </nav>

    <div class="content">
        <div class="title text-center m-b-md">
            <img src="/img/pizza-house.jpg" alt="pizza house logo" id="pizza-logo" width="200">
            <h1>Pizza House</h1>
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection