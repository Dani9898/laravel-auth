@extends('layouts.main-layout')

@section('content')
    
    @auth

        <h1>{{ Auth::user() -> name }}</h1>

        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>

    @endauth

    asdasd

@endsection