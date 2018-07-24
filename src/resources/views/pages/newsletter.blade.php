@extends('job-core::layouts.app')

@section('title', config('job-core.keyword_root') . ' Newsletter')

@section('content')
    <section class="jumbotron text-center mt-3 {{ config('job-core.body_class') }}">
        <div class="container">
            <h1 class="jumbotron-heading">
                <i class="fa fa-envelope"></i>
                Newsletter
            </h1>
            <p class="lead text-muted">{{ ucfirst(strtolower(str_singular(config('job-core.keyword')))) }} insights and advice.</p>
            <p class="lead text-muted mb-1">
                <a href="{{ route('register') }}" class="btn {{ config('job-core.button_class') }}">
                    Get Newsletter
                </a>
            </p>
            <p class="lead text-muted small"><em>Occasional emails - No SPAM</em></p>
        </div>
    </section>
@endsection