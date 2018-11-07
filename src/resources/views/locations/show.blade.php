@extends('edu-core::layouts.app')

@section('title', $location->title)

@section('content')
<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <a href="{{ url(route('locations.show', ['location' => $location->slug])) }}">
                        {{ $location->title }}
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <ol class="breadcrumb">
        <li><a href="{{ route('home.index') }}">Home</a></li>
        <li class="active">{{ $location->name }}</li>
    </ol>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            @foreach($schools as $school)
                @include('edu-core::partials.school')
            @endforeach
            {!! $schools->links() !!}
        </div>
    </div>
</div>
@endsection