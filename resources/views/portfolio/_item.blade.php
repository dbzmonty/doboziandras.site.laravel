<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex">
            <img width="150" height="150" src="{{ $post->cover_image }}" alt="{{ $post->title }}" style="object-fit: cover;">            
            <div class="ml-5">
                <h4 class="display-4">{{ $post->title }}</h4>
                <div>
                    {{ $post->created_at->diffForHumans() }}
                </div>
                <p class="font-weight-bold">
                    {{ $post->description }}
                </p>
                <p class="text-end">
                    <a class="btn btn-secondary btn-sm" href="{{ route('portfolio.details', $post) }}">Read more</a>
                </p>
            </div>
        </div>        
    </div>
</div>