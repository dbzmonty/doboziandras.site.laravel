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
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3 d-flex">
                            <div class="d-flex font-weight-bold">
                                {{ $comment->user->name . " | " . $comment->created_at->diffForHumans() }}
                            </div>
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