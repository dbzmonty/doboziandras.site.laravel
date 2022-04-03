@extends('layouts.main')

@section('content')
    <h3 class="display-3">{{ $post->title }}</h3>
    <hr />
    <p>{{ $post->created_at->diffForHumans() }}</p>
    <hr />
    <p class="font-weight-bold">{{ $post->description }}</p>
    <hr />
    <div>
        {!! $post->content !!}
    </div>
@endsection