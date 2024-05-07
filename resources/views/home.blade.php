@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>CLEO BARBER & COFFEE </h1>
            <h2> GOOD LOOK - GOOD MOOD</h2>

            <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Sistem Antrian Online</h3>
                            <p>
                                Ini adalah Sistem Antrian Online Cleo barber & coffee dimana setiap pengunjung dapat
                                mengambil antrian
                            </p>
                            <div class="text-center">
                                <a href="/antrian" class="more-btn">Ambil Antrian <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <h4>Hair cut</h4>
                                        <p>
                                        <h5>40k</h5>Consultation, Haircut, Shaving,
                                        Hair Wash, Hair Tonic, Massage, Warm Towel, Pomade
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <h4>Good Look</h4>
                                        <p>
                                        <h5>70k</h5>Consultation, Haircut, Shaving,
                                        Hair Wash, Hair Tonic, Massage, Warm Towel, Pomade, Black Mask</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <h4>Good Mood</h4>
                                        <p>
                                        <h5>80k</h5>Consultation, Haircut, Shaving,
                                        Hair Wash, Hair, Tonic, Massage, Warm Towel, Pomade, Hair Mask</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <h4>Enjoy</h4>
                                        <p>
                                        <h5>135kk</h5>Consultation, Haircut, Shaving, Hair Wash, Hair Tonic, Warm Towel,
                                        Pomade, Hair Mask, Hydrotherapy, Foot & Hand Massage, Back & Shoulder Massage,
                                        Head Massage</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <h4>add on- Coloring</h4>
                                        <p>
                                        <h5>80k</h5>Standart - Black, Dark Brown, Blue black</p>
                                        <p>
                                        <h5>350k</h5>Variation - Gray, Tan Brown, Red, Blue, ETC</p>
                                        <p>
                                        <h5>150K</h5>Re Touch Color</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
            </div>
        </section><!-- End Why Us Section -->


        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Iklan &amp; Terbaru</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Ingin memasang iklan anda juga? gratis, klik <a
                                href="{{ route('menu') }}">disini</a>.</p>
                    </div>
                </div>
            </div>
            <div class="row">
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
                                    <small class="me-3"><i
                                            class="far fa-user text-primary me-2"></i>{{ $iklan->user->name }}</small>
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
            </div>
        </div>


        <!-- ======= NANTI DISINI BUAT UPLOAD PRODUCT======= -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>



            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. DR. Soeparno No.676, Arcawinangun, Kec. Purwokerto Tim., Kabupaten Banyumas</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>cleo.barber@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

@include('partials.footer')
