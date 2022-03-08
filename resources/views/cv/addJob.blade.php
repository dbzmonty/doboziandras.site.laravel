@extends('layouts.main');

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="display-5">{{ __('Add job') }}</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('cv.addJob') }}" method="POST">                    
                    @csrf                    
                    <div class="mb-3">
                        <label for="position">{{ __('Position') }}</label>
                        <input class="form-control" type="text" name="position" minlength="3" maxlength="240" required>
                    </div>
                    <div class="mb-3">
                        <label for="company">{{ __('Company') }}</label>
                        <input class="form-control" type="text" name="company" minlength="3" maxlength="240" required>
                    </div>
                    <div class="mb-3">
                        <label for="location">{{ __('Location') }}</label>
                        <input class="form-control" type="text" name="location" minlength="3" maxlength="240" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_period">{{ __('Date period') }}</label>
                        <input class="form-control" type="text" name="date_period" minlength="3" maxlength="240" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
