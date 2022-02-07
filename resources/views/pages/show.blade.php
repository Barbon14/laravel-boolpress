@extends('layouts.main-layout')

@section('content')
    <article>
        <h2>
            {{ $post-> title }}
        </h2>
        <h3>
            {{ $post-> text }}
        </h3>
        <img src="{{ $post-> img }}" alt="non trovo immagine">
    </article>

    <a href="{{ route('postList') }}">Back to List</a>

@endsection