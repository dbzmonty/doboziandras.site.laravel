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
<form action="{{ route('portfolio.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="d-flex align-items-center mb-3">
        <h3 class="display-3">{{ __('Publish') }}</h3>
        <button class="ms-auto btn btn-secondary">Publish</button>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6">
            <div class="card">
                <div class="card-body">
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
                </div>            
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card">
                <div class="card-body">                    
                    <div class="mb-3">
                        <label for="cover">{{ __('Cover image (jpg, jpeg, bmp, png)') }}</label>
                        <input class="form-control{{ $errors->has('cover') ? ' is-invalid' : '' }}" type="file" name="cover" value="{{ old('cover') }}">
                        @if ($errors->has('cover'))
                            <p class="invalid-feedback">{{ $errors->first('cover') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection