@extends('layouts.main')

@section('content')
    <!-- HERO -->
    <div class="pt-3 text-center" id="hero">
        <h1 class="display-4 fw-bold">G-HEALTH</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead">Hadir sebagai Teman Mental Health-Mu</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="{{ url('/login') }}" class="btn btn-primary btn-lg px-4 me-sm-3" target="_blank">Get Started</a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;"></div>
    </div>
    <!-- End HERO -->

    <!-- ABOUT -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 p-0 text-center">
                <img src="/img/about.jpeg" style="width: 390px;">
            </div>
            <div class="col-md-6 p-4 p-sm-5">
                <small class="text-uppercase" style="color: #57555a;">About</small>
                <h1 class="h2 mb-4" style="font-weight: 700;">G-Health <span style="color: #57555a;">Here!</span></h1>
                <p class=style="line-height: 2; color: black;">Platform bagi masyarakat untuk
                    menenangkan diri dan pikiran melalui pelayanan yang disediakan.
                </p>
            </div>
        </div>
    </div>
    <!-- End ABOUT -->

    <!-- SERVICES -->
    <div class="container px-4" id="services">
        <h2 class="pb-2 text-center">Services</h2>
        <div class="row g-4 row-cols-1 row-cols-lg-2">
            <div class="feature col">
                <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
                    style="mix-blend-mode:color-burn;">
                    <img src="/img/spotify.png" alt="" srcset="">
                </div>
                <h3 class="fs-2">Audio Theraphy</h3>
                <p>Terapi audio dikenal sebagai terapi suara atau terapi musik untuk meningkatkan kesehatan fisik, mental,
                    dan emosional.
                    Ini dapat digunakan untuk mengatasi berbagai masalah, termasuk stres, kecemasan, depresi, trauma, sakit
                    kronis, dan insomnia</p>
            </div>
            <div class="feature col">
                <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
                    style="mix-blend-mode:color-burn;">
                    <img src="/img/discuss.png" alt="" srcset="">
                </div>
                <h3 class="fs-2">Forum Discussion</h3>
                <p>Forum Diskusi adalah forum online tempat pengguna dapat memposting pesan dan terlibat dalam diskusi
                    tentang topik atau kelompok topik tertentu.
                    Forum ini dikhususkan untuk membahas masalah seputar kesehatan mental dan saling berbagi pikiran</p>
            </div>
            <div class="feature col">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="/img/yoga1.png" alt="" srcset="">
                </div>
                <h3 class="fs-2">Yoga Theraphy</h3>
                <p>Terapi yoga adalah bentuk terapi yang menggunakan praktik dan prinsip yoga untuk mengatasi masalah
                    kesehatan fisik, mental, dan emosional.
                    Ini berisi kumpulan video yoga yang bertujuan untuk terapeutik.</p>
            </div>
            <div class="feature col">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="/img/consult.png" alt="" srcset="">
                </div>
                <h3 class="fs-2">Consult A Doctor</h3>
                <p>Konsultasi Dokter menjembatani anda untuk dapat berkonsultasi langsung dengan dokter spesialis secara
                    online</p>
            </div>
        </div>
    </div>
    <!-- End SERVICES -->

    <!-- Testimonial  -->
    <div class="client pt-3 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-3 text-dark">Testimonials</h1>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
                    <p class="p-text text-dark">Apa kata mereka?</p>
                </div>
            </div>
            <div class="row align-items-md-center text-dark">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Platform ini sangat membantu saya yang ingin mencari referensi
                                            musik dan yoga sebagai terapi ketenangan pikiran.</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 pt-3">
                                            <img src="/img/ty.jpg" class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong>Maman xpander</strong></h4>
                                            <p class="testimonial_subtitle"><span>Football Manager</span><br>
                                                <span>Manchester United</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">
                                            Gokil bat dah ni platform, eaaakkkk.
                                        </p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 pt-4">
                                            <img src="/img/jk.jpg" class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong>Ganta Raharja</strong></h4>
                                            <p class="testimonial_subtitle"><span>
                                                    Penyiar Radio</span><br>
                                                <span>Radio 93FM Bandung</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">sehhh.. boljug nih.</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row text-lg-start">
                                        <div class="col-sm-2 pt-4 align-items-center">
                                            <img src="/img/mr.jpg" class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-md-block"></div>
                                            <h4><strong>Gatot Dinata</strong></h4>
                                            <p class="testimonial_subtitle"><span>Web Technologist</span><br>
                                                <span>Poemeh</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls push-right">
                        <a class="bi bi-arrow-left btn btn-outline-dark" href="#carouselExampleCaptions"
                            data-bs-slide="prev"></a>
                        <a class="bi bi-arrow-right btn btn-outline-dark" href="#carouselExampleCaptions"
                            data-bs-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- MEMBER -->
    <div id="team" class="team team-bg py-5">
        <div class="container">
            <div class="section-title">
                <p class="main-team-subheading">Team</p>
                <p class="main-team-heading">Our GACOR's Team</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/atep.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Anisa Theryana Putri</p>
                            <span>Frontend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href="https://twitter.com/theryanaptrii" target="_blank"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://www.instagram.com/thryna_a/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://github.com/thryna/" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/sri.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Sri Lestari</p>
                            <span>Frontend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href="" target="_blank"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.instagram.com/_srilstr17/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://github.com/SriLestariii/" target="_blank"><i
                                        class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/pute.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Putri Ade Novianti</p>
                            <span>Backend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href="https://twitter.com/urrrheaven" target="_blank"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://www.instagram.com/ptridnov.y/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://github.com/putridnovyy/" target="_blank"><i
                                        class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/sopian.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Muhammad Sopian</p>
                            <span>Backend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href="https://twitter.com/smartestmuggles/" target="_blank"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://instagram.com/msopiann/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://github.com/msopiann190/" target="_blank"><i
                                        class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End MEMBER -->
@endsection
