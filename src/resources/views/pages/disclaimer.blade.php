@extends('edu-core::layouts.app')

@section('title', 'Disclaimer')

@section('content')
    <p>
        1. This website is not endorsed by, or associated with, any government agency. {{ config('edu-core.domain') }} is a privately owned website run by <a href="https://familymediallc.com/">Family Media LLC</a>. Family Media publishes free internet resources for niche audiences online. If you have any questions, please contact us.
    </p>
    <p>
        2. The listings on our website come from <a href="https://nces.ed.gov/" target="_blank">NCES.gov</a>. We try our best to offer you the most up-to-date information on schools, but we cannot guarantee the accuracy of any information posted on {{ config('edu-core.domain') }}.
    </p>
    <p>
        3. This website generates income through banner advertisements and affiliate links. Third party vendors, including Google, use cookies to serve ads based on a user's prior visits to our website.    
    </p>
@endsection