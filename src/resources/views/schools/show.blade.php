@extends('edu-core::layouts.app')

@section('title', $school->title)

@section('content')
    <h1 class="my-5">
        <a href="{{ url(route('schools.show', ['school' => $school->slug])) }}" class="text-dark">
            {{ $school->name }}
        </a>
    </h1>
    <ol class="breadcrumb bg-light">
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
                            <h4>Students</h4>
                            <span class="text-medium">{{ $school->meta['students'] }}</span>
                        </div>
                        <div class="col-6">
                            <h4>Hours/Day</h4>
                            <span class="text-medium">{{ round($school->meta['hours'], 1) }}</span> HOURS
                        </div>
                    </div>
                    <hr />
                    <div class="progress-label">
                        Male <span class="pull-right">{{ round($school->meta['males'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['males'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['males'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['males'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        Female <span class="pull-right">{{ round($school->meta['females'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['females'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['females'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['females'], 1) }}%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4>Teachers</h4>
                            <span class="text-medium">{{ $school->meta['teachers'] }}</span>
                        </div>
                        <div class="col-6">
                            <h4>S/T Ratio</h4>
                            @if($school->meta['st_ratio'] < 1)
                                <span class="text-medium">1:{{ round(1 / $school->meta['st_ratio']) }}</span>
                            @else
                                <span class="text-medium">{{ round($school->meta['st_ratio']) }}:1</span>
                            @endif
                        </div>
                    </div>
                    <hr />
                    <div class="progress-label">
                        Full-Time <span class="pull-right">{{ round($school->meta['full_teachers'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['full_teachers'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['full_teachers'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['full_teachers'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        Part-Time <span class="pull-right">{{ round($school->meta['part_teachers'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['part_teachers'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['part_teachers'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['part_teachers'], 1) }}%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4>Student Body</h4>
                    <span class="text-medium">{{ $school->meta['gender'] }}</span>
                    <hr />
                    <div class="progress-label">
                        American Indian or Alaskan Native <span class="pull-right">{{ round($school->meta['indian'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['indian'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['indian'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['indian'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        Asian <span class="pull-right">{{ round($school->meta['asian'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['asian'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['asian'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['asian'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                         Native Hawaiian or Pacific Islander <span class="pull-right">{{ round($school->meta['pacific'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['pacific'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['pacific'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['pacific'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        Hispanic <span class="pull-right">{{ round($school->meta['hispanic'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['hispanic'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['hispanic'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['hispanic'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        White <span class="pull-right">{{ round($school->meta['white'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['white'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['white'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['white'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        Black <span class="pull-right">{{ round($school->meta['black'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['black'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['black'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['black'], 1) }}%</span>
                        </div>
                    </div>
                    <div class="progress-label">
                        Two or more <span class="pull-right">{{ round($school->meta['two_plus'], 1) }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($school->meta['two_plus'], 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($school->meta['two_plus'], 4) }}%">
                            <span class="sr-only">{{ round($school->meta['two_plus'], 1) }}%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection