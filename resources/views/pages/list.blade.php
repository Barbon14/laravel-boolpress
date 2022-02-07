@extends('layouts.main-layout')

@section('content')

    <a href="{{ route('create') }}">Add New Post</a>

    <ul>
        @foreach ($posts as $post)
            <a href="{{ route('show', $post -> id) }}">
                <li>
                    {{ $post -> title }}
                </li>
            </a>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Back to Home</a>
@endsection