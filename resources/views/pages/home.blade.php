@extends('layouts.main-layout')

@section('content')

    @auth
        <h2>Ciao {{ Auth::user() -> name }}!</h2>
        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>

        <a href="{{ route('postList') }}">Post List</a>
    @else
        <h2>Registrati o effettua il Login</h2>
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
    
        <br>
    
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
    @endauth


    @endsection