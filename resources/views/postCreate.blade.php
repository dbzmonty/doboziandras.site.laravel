@extends('layouts.main')

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
                });
    </script>
@endpush

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3">{{ __('Publish') }}</h3>    

                <form action="{{ route('postCreate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title">{{ __('Title') }}</label>
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" value="{{ old('title') }}" name="title" id="title">
                        @if ($errors->has('title'))                            
                            <p class="invalid-feedback">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description">{{ __('Description') }}</label>
                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" type="text" value="{{ old('description') }}" name="description" id="description">
                        @if ($errors->has('description'))                            
                            <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="content">{{ __('Content') }}</label>
                        <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" id="content">{{ old('content') }}</textarea>
                        @if ($errors->has('content'))                            
                            <p class="invalid-feedback">{{ $errors->first('content') }}</p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-secondary btn-lg">Publish</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>
@endsection