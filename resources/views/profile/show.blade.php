@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-3 text-center">
            <img class="rounded-circle mb-3" src="{{ $user->avatar }}" alt="{{ $user->name }}">
            <h3>{{ $user->name }}</h3>
            <p class="font-weight-bold">{{ $user->email }}</p>
            <p>{{ __('Registered') }}: {{ $user->created_at->diffForHumans() }}</p>
            <p>{{ __('Comments') }}: {{ $user->comments->count() }}</p>
        </div>
        <div class="col-lg-9">
            @forelse($comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3 d-flex my-auto">
                            <div class="d-flex font-weight-bold">
                                <a href="{{ route('portfolio.details', $comment->commentable->id) }}">
                                    {{ $comment->commentable->title }}
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
            @empty
                <div class="alert alert-warning">
                    {{ __('No comments to show') }}
                </div>
            @endforelse            
        </div>
    </div>
@endsection