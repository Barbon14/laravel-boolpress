@extends('layouts.main-layout')

@section('content')

    <form action="{{ route('store') }}" method="POST">

        @method('POST')
        @csrf

        <label for="title">title</label>
        <input type="text" name="title"> <br>

        <label for="text">text</label>
        <textarea name="text" cols="30" rows="10"></textarea> <br>
        
        <label for="img">image</label>
        <input type="text" name="img"> <br>

        <input type="submit" value="Create">

    </form>

    <a href="{{ route('postList') }}">Back to List</a>
@endsection