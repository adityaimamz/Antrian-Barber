@extends('layouts.main')

@include('partials.navbar')
<!-- Navbar End -->
<div class="container-fluid py-5 wow mt-5 fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset($iklan->image) }}" alt="">
                    <h1 class="mb-4">{{ $iklan->judul }}</h1>
                    <h5 class="my-3 text-secondary">
                        {{ \Carbon\Carbon::parse($iklan->created_at)->format('D, d M Y') }}</h5>
                    {!! $iklan->content !!}
                </div>
                <!-- Blog Detail End -->
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
