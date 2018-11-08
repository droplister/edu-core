@extends('edu-core::layouts.app')

@section('title', $school->title)

@section('content')
    <h1 class="my-5">
        <a href="{{ url(route('schools.show', ['school' => $school->slug])) }}" class="text-dark">
            {{ $school->name }}
        </a>
    </h1>
    <ol class="breadcrumb mb-4 bg-light">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">
                Home
            </a>
        </li>
        <li class="breadcrumb-item active">
            {{ $school->name }}
        </li>
    </ol>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5>Students</h5>
                            <span class="text-medium">
                                {{ $school->meta['students'] }}
                            </span>
                        </div>
                        <div class="col-6">
                            <h5>Hours/Day</h5>
                            <span class="text-medium">{{ round($school->meta['hours'], 1) }}</span> Hours
                        </div>
                    </div>
                    <hr />
                    @include('partials.progress-bar', ['title' => 'Male', 'meta' => $school->meta['males']])
                    @include('partials.progress-bar', ['title' => 'Female', 'meta' => $school->meta['females']])
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5>Teachers</h5>
                            <span class="text-medium">{{ $school->meta['teachers'] }}</span>
                        </div>
                        <div class="col-6">
                            <h5>S/T Ratio</h5>
                            @if($school->meta['st_ratio'] < 1)
                                <span class="text-medium">1:{{ round(1 / $school->meta['st_ratio']) }}</span>
                            @else
                                <span class="text-medium">{{ round($school->meta['st_ratio']) }}:1</span>
                            @endif
                        </div>
                    </div>
                    <hr />
                    @include('partials.progress-bar', ['title' => 'Full-Time', 'meta' => $school->meta['full_teachers']])
                    @include('partials.progress-bar', ['title' => 'Part-Time', 'meta' => $school->meta['part_teachers']])
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Student Body</h5>
                    <span class="text-medium">{{ $school->meta['gender'] }}</span>
                    <hr />
                    @include('partials.progress-bar', ['title' => 'American Indian or Alaskan Native', 'meta' => $school->meta['indian']])
                    @include('partials.progress-bar', ['title' => 'Asian', 'meta' => $school->meta['asian']])
                    @include('partials.progress-bar', ['title' => 'Native Hawaiian or Pacific Islander', 'meta' => $school->meta['pacific']])
                    @include('partials.progress-bar', ['title' => 'Hispanic', 'meta' => $school->meta['hispanic']])
                    @include('partials.progress-bar', ['title' => 'White', 'meta' => $school->meta['white']])
                    @include('partials.progress-bar', ['title' => 'Black', 'meta' => $school->meta['black']])
                    @include('partials.progress-bar', ['title' => 'Two or more', 'meta' => $school->meta['two_plus']])
                </div>
            </div>
        </div>
    </div>
@endsection