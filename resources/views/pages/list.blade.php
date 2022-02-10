@extends('layouts.main-layout')

@section('content')

    <a href="{{ route('create') }}">Add New Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('show', $post -> id) }}">
                    {{ $post -> title }} - {{ $post -> category -> name }}
                </a>
                - <a href="{{ route('edit', $post -> id) }}">
                    EDIT
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Back to Home</a>
@endsection