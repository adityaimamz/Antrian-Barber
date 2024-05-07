@extends('layouts.main')

@include('partials.navbar')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated zoomIn">Ingin Memasang Iklan disini? </h1>
            <p class="display-6 text-white animated zoomIn">Pasang juga iklan mu, gratis <a style="color: white;   text-decoration-line: underline;"   href={{ route('menu') }}>disini</a> </p>
        </div>
    </div>
</div>
</div>
<!-- Navbar End -->

<!-- Blog Start -->
<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    @foreach ($iklans as $iklan)
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ asset($iklan->image) }}" alt="">
                                    {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                        href="">{{ $iklan->judul }}</a> --}}
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $iklan->user->name }}</small>
                                        <small><i
                                                class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($iklan->created_at)->format('D, d M Y') }}</small>
                                    </div>
                                    <h4 class="mb-3">{{ $iklan->title }}</h4>
                                    <p> {{ substr($iklan->content, 0, 120) }}{{ strlen($iklan->content) > 120 ? '...' : '' }}
                                    </p>
                                    <a class="text-uppercase" href="iklan/detail/{{ $iklan->id }}">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg m-0">
                                <!-- Tombol Previous -->
                                <li class="page-item {{ $iklans->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link rounded-0" href="{{ $iklans->previousPageUrl() }}"
                                         aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                    </a>
                                </li>

                                <!-- Menampilkan nomor halaman -->
                                @for ($i = 1; $i <= $iklans->lastPage(); $i++)
                                    <li class="page-item {{ $iklans->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $iklans->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!-- Tombol Next -->
                                <li
                                    class="page-item {{ $iklans->currentPage() == $iklans->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link rounded-0" href="{{ $iklans->nextPageUrl() }}"
                                        aria-label="Next">
                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog End -->

@include('partials.footer')