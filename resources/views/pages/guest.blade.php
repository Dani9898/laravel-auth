@extends('layouts.main-layout')

@section('content')
    
    <h1>Accedi o registrati</h1>

    <h2>Register</h2>

    <form action="{{ route('register') }}" method="POST">

        @method('POST')
        @csrf


        <label for="name">Name</label>
        <input type="text" name="name"> <br>
        <label for="email">E-mail</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <label for="password_confirmation">Password confirm</label>
        <input type="password" name="password_confirmation"> <br>
        <br>
        <input type="submit" value="REGISTER">

    </form>

        <br><hr class="bg-white"><br>

        <h2>Login</h2>

    <form action="{{ route('login') }}" method="POST">

        @method('POST')
        @csrf


        <label for="email">E-mail</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <br>
        <input type="submit" value="LOGIN">

    </form>

@endsection
