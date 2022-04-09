@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-6 col-lg-10 mx-auto">
        @foreach($posts as $post)
            @include('portfolio._item')
        @endforeach
        {{ $posts->links() }}
    </div>
</div>
@endsection