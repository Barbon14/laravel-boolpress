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

        <label for="category">Category</label>

        <select name="category">
            @foreach ($categories as $category)
                <option value="{{$category -> id }}">{{ $category -> name }}</option>
            @endforeach
        </select> <br>

        <h3>
            Tags
        </h3>

        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{ $tag -> id }}">{{ $tag -> name }}
        @endforeach

        <br>
        <input type="submit" value="Create">

    </form>

    <a href="{{ route('postList') }}">Back to List</a>
@endsection