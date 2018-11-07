@extends('edu-core::layouts.app')

@section('title', $location->title)

@section('content')
    <h1 class="my-5">
        <a href="{{ url(route('locations.show', ['location' => $location->slug])) }}" class="text-dark">
            {{ $location->title }}
        </a>
    </h1>
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">
                Home
            </a>
        </li>
        <li class="breadcrumb-item active">
            {{ $location->name }}
        </li>
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
@endsection