@extends('layouts.main')

@section('content')
    <h3 class="display-3">{{ $post->title }}</h3>
    <a class="btn btn-secondary mt-2 mb-2" href="{{ route('portfolio.edit', $post) }}">Edit</a>
    <hr />
    <p>{{ $post->created_at->diffForHumans() }}</p>
    <hr />
    <p class="font-weight-bold">{{ $post->description }}</p>
    <hr />
    <div>
        {!! $post->content !!}
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <h5 class="display-5">
                {{ __('Comments') }}
            </h5>
            <form action="{{ route('portfolio.comment', $post) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" name="comment" minlength="10" required></textarea>
                </div>
                <div class="d-grid">
                    <button class="btn btn-secondary">
                        {{ __('Comment') }}
                    </button>
                </div>
            </form>
            <div class="mt-5">
                @foreach($post->comments as $comment)
                <div class="card mb-3" id="comment-{{$comment->id}}">
                    <div class="card-body">
                        <div class="mb-3 d-flex my-auto">
                            <div class="d-flex font-weight-bold">
                                <a href="{{ route('profile.show', $comment->user) }}" class="mr-2">
                                    <img class="rounded-circle me-2" width="25" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}">
                                </a>
                                <a href="{{ route('profile.show', $comment->user) }}">
                                    {{ $comment->user->name }}
                                </a>
                            </div>
                            <span class="ml-3">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <div style="white-space: pre-line;">
                            {{ $comment->message }}    
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>
    </div>
@endsection