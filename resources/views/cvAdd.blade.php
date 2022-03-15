@extends('layouts.main');

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="display-5">{{ __('Add a CV entry') }}</h5>
                
                <form action="{{ route('cvAdd') }}" method="POST">                    
                    @csrf    
                    <div class="mb-3">
                        <label for="category_id">{{ __('Category') }}</label>
                        <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" id="category_id">
                            <option value="">{{ __('Please choose') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? ' selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach                            
                        </select>
                        @if ($errors->has('category_id'))                            
                            <p class="invalid-feedback">{{ str_contains($errors->first('category_id'), 'required') ? 'Please choose a category.' : $errors->first('category_id') }}</p>
                        @endif
                    </div>                
                    <div class="mb-3">
                        <label for="title" id="lblTitle">{{ __('Title') }}</label>
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))                                                      
                            <p class="invalid-feedback">{{ str_contains($errors->first('title'), 'required') ? 'This field is required.' : $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="company" id="lblCompany">{{ __('Company') }}</label>
                        <input class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" type="text" name="company" value="{{ old('company') }}">
                        @if ($errors->has('company'))                            
                            <p class="invalid-feedback">{{ str_contains($errors->first('company'), 'required') ? 'This field is required.' : $errors->first('company') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="location" id="lblLocation">{{ __('Location') }}</label>
                        <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location') }}">
                        @if ($errors->has('location'))                            
                            <p class="invalid-feedback">{{ $errors->first('location') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="year_from" id="lblYear_from">{{ __('Year from') }}</label>
                        <input class="form-control{{ $errors->has('year_from') ? ' is-invalid' : '' }}" type="numeric" name="year_from" id="year_from" value="{{ old('year_from') }}">
                        @if ($errors->has('year_from'))                            
                            <p class="invalid-feedback">{{ $errors->first('year_from') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="year_to" id="lblYear_to">{{ __('Year to') }}</label>
                        <input class="form-control{{ $errors->has('year_to') ? ' is-invalid' : '' }}" type="numeric" name="year_to" id="year_to" value="{{ old('year_to') }}">
                        @if ($errors->has('year_to'))                            
                            <p class="invalid-feedback">{{ $errors->first('year_to') }}</p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-secondary btn-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const inputCategory = document.getElementById("category_id");
    setFormVisibility();

    inputCategory.addEventListener("change", setFormVisibility);
    
    function setFormVisibility()
    {
        var selectedValue = inputCategory.value;

        if (selectedValue == 1 || selectedValue == '') // Qualification
        {
            document.getElementById("lblTitle").innerHTML = "Qualification";
            document.getElementById("lblCompany").innerHTML = "Institude";

            document.getElementById("lblLocation").style.display = "initial";
            document.getElementById("location").style.display = "initial";

            document.getElementById("lblYear_from").style.display = "initial";
            document.getElementById("year_from").style.display = "initial";

            document.getElementById("lblYear_to").style.display = "initial";
            document.getElementById("year_to").style.display = "initial";
        }
        else if (selectedValue == 2) // Work experience
        {
            document.getElementById("lblTitle").innerHTML = "Work experience";
            document.getElementById("lblCompany").innerHTML = "Company";

            document.getElementById("lblLocation").style.display = "initial";
            document.getElementById("location").style.display = "initial";

            document.getElementById("lblYear_from").style.display = "initial";
            document.getElementById("year_from").style.display = "initial";

            document.getElementById("lblYear_to").style.display = "initial";
            document.getElementById("year_to").style.display = "initial";
        }

        else if (selectedValue == 3) // Course
        {
            document.getElementById("lblTitle").innerHTML = "Course";
            document.getElementById("lblCompany").innerHTML = "Platform";

            document.getElementById("lblLocation").style.display = "none";
            document.getElementById("location").style.display = "none";

            document.getElementById("lblYear_from").style.display = "none";
            document.getElementById("year_from").style.display = "none";

            document.getElementById("lblYear_to").style.display = "none";
            document.getElementById("year_to").style.display = "none";
        }
    }
    
</script>

@endsection
