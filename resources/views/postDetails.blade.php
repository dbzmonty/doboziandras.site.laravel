@extends('layouts.main')

@section('content')
    <h1 class="display-1">{{ $post->title }}</h1>
    <hr />
    <p>{{ $post->created_at->diffForHumans() }}</p>
    <hr />
    <p class="font-weight-bold">{{ $post->description }}</p>
    <hr />
    <div>
        {!! $post->content !!}
    </div>
@endsection