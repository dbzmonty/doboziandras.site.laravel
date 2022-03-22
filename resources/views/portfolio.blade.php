@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex">
                    <img width="150" height="150" src="https://via.placeholder.com/350" alt="{{ $post->title }}">            
                    <div class="ml-5">
                        <h4 class="display-4">{{ $post->title }}</h4>
                        <div>
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                        <p class="fw-bold">
                            {{ $post->description }}
                        </p>
                        <p class="text-end">
                            <a class="btn btn-secondary btn-sm" href="{{ route('postDetails', $post) }}">Read more</a>
                        </p>
                    </div>
                </div>        
            </div>
        </div>
        @endforeach
        {{ $posts->links() }}
    </div>
</div>
@endsection