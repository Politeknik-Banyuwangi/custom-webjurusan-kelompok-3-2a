@extends('frontend.layouts.base')
@section('app')
    <!-- Header -->
    @include('frontend.layouts.partials.header')
    <!-- Content -->
    @yield('breadcrumb')
    @yield('content')
    <!-- Footer -->
    @include('frontend.layouts.partials.footer')
@endsection
