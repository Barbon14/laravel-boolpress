@extends('layouts.main-layout')

@section('content')

    <form action="{{ route('update', $post -> id) }}" method="POST">

        @method('POST')
        @csrf

        <label for="title">title</label>
        <input type="text" name="title" value="{{ $post -> title }}"> <br>

        <label for="text">text</label>
        <textarea name="text" cols="30" rows="10">{{ $post -> text }}</textarea> <br>
        
        <label for="img">image</label>
        <input type="text" name="img" value="{{ $post -> img }}"> <br>

        <label for="category">Category</label>

        <select name="category">
            @foreach ($categories as $category)
                <option value="{{$category -> id }}"

                    @if ($category -> id == $post -> category -> id )
                        selected
                    @endif
                    
                    >{{ $category -> name }}</option>
            @endforeach
        </select> <br>

        <h3>
            Tags
        </h3>

        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{ $tag -> id }}"
            
                @foreach ($post -> tags as $posttag)

                    @if ($tag -> id == $posttag -> id )
                        checked
                    @endif
                @endforeach
            
            >{{ $tag -> name }}
        @endforeach

        <br>
        <input type="submit" value="Edit">

    </form>

    <a href="{{ route('postList') }}">Back to List</a>

@endsection