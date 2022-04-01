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
                    <x-forms.input name="title" label="{{ __('Title') }}" />
                    <x-forms.input name="description" label="{{ __('Description') }}" />
                    <x-forms.input name="content" label="{{ __('Content') }}" />
                </div>            
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <x-forms.input name="cover" label="{{ __('Cover image (jpg, jpeg, bmp, png)') }}" type="file" />
                </div>
            </div>
        </div>
    </div>
</form>
@endsection