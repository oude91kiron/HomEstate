
@extends('layouts.front.site')
@section('content')

<!-- Featured projects start -->
    @include('front/sections/featured_projects')
<!-- Featured projects end -->

<!-- services 3 start -->
    @include('front/sections/services')
<!-- services 3 end -->

<!-- Recent Properties start @ include('front/sections/recent_project') Recent Properties end -->

<!-- Most popular places start -->
    @include('front/sections/popular_places')
<!-- Most popular places end -->

<!-- Agent start 
    @ include('front/sections/our_agents')
    Agent end -->

<!-- Testimonial 4 start -->
    @include('front/sections/testimonial')
<!-- Testimonial 4 end -->

<!-- Blog start -->
    @include('front/sections/our_blog')
<!-- Blog end -->

<!-- form start -->
@include('front/sections/contact_form')
<!-- form end -->

@endsection