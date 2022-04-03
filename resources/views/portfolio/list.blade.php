@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-lg-12 mb-12">        
        <h1><a class="btn btn-secondary" href="{{ route('portfolio.add') }}">Add</a></h1>
    </div>    
</div>

<div class="row">
    <div class="col-md-6 col-lg-10 mx-auto">
        @foreach($posts as $post)
            @include('portfolio._item')
        @endforeach
        {{ $posts->links() }}
    </div>
</div>
@endsection