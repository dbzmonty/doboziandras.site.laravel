@extends('layouts.main')

@section('content')
    <h1 class="display-1">{{ $post->title }}</h1>
    <p>{{ $post->created_at->diffForHumans() }}</p>
    <p class="fw-bold">{{ $post->description }}</p>
    <div>
        {!! $post->content !!}
    </div>
@endsection