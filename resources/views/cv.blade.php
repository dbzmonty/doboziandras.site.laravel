@extends('layouts.main');

@section('content')

<div class="row">
    <div class="col-lg-12 mb-12">        
        <h1><a class="btn btn-secondary" href="{{ route('cvAdd') }}">Add</a></h1>
    </div>    
</div>

<div class="row">
    <div class="col-lg-12 mb-12">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-info">
                    <th>Qualification</th>
                    <th>Institude</th>
                    <th>Location</th>
                    <th>Date</th>
                </tr>
            <tbody>
                @foreach($qualifications as $qualification)
                    <tr>
                        <td>{{ $qualification->title }}</td>
                        <td>{{ $qualification->company }}</td>
                        <td>{{ $qualification->location }}</td>
                        <td>{{ $qualification->year_from }} - {{ $qualification->year_to }}</td>
                    </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 mb-12">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-info">
                    <th>Work experience</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Date</th>
                </tr>
            <tbody>
                @foreach($workexperiences as $workexperience)
                    <tr>
                        <td>{{ $workexperience->title }}</td>
                        <td>{{ $workexperience->company }}</td>
                        <td>{{ $workexperience->location }}</td>
                        <td>{{ $workexperience->year_from }} - {{ $workexperience->year_to }}</td>
                    </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 mb-12">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="table-info">
                    <th>Course</th>
                    <th>Platform</th>
                </tr>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->company }}</td>
                    </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
</div>

@endsection