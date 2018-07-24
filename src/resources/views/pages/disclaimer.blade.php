@extends('job-core::layouts.app')

@section('title', 'Disclaimer')

@section('content')
    @include('job-core::partials.title', [
        'fa' => 'fa-info-circle',
        'title' => 'Disclaimer',
        'link' => route('pages.disclaimer')
    ])
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <div class="row">
            <div class="col-12 col-md-9">
                <h6 class="border-bottom border-gray pb-2 mb-0">
                    Disclaimers
                </h6>
                <p class="text-muted small lh-135 mt-3">1. {{ config('job-core.domain') }} is a privately owned website. Family Media LLC publishes free internet resources for niche audiences online. This website is not endorsed by any government agency.</p>
                <p class="text-muted small lh-135">2. The majority of our job listings come from <a href="https://www.usajobs.gov/" target="_blank">USAJobs.gov</a>. We try our best to offer the most up-to-date information, but we cannot guarantee the accuracy of information posted on {{ config('job-core.domain') }}.</p>
                <p class="text-muted small lh-135">3. This site generates income through banner advertisements and affiliate links. Third party vendors, including Google, use cookies to serve ads based on a user's prior visits to our website. </p>
            </div>
            <div class="col-12 col-md-3">
            </div>
        </div>
    </div>
@endsection