@extends('layouts.app')

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
            <img src="https://images.pexels.com/photos/2467506/pexels-photo-2467506.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                class="w-100" alt="">
        </div>
        <div class="col-md-6 p-4 p-sm-5">
            <small class="text-uppercase" style="color: #9B5DE5;">About us</small>
            <h1 class="h2 mb-4" style="font-weight: 600;">Your Headline <span style="color: #9B5DE5;">Here!</span></h1>
            <p class="text-secondary" style="line-height: 2;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Suscipit repellat iure laboriosam cum voluptatum, nam minima deserunt aut? Distinctio voluptatibus dolor
                quaerat quo omnis illo sequi at velit, odit quod!</p>
        </div>
    </div>
</div>
<!-- End ABOUT -->

<!-- SERVICES -->
<div class="container px-4" id="services">
    <h2 class="pb-2 text-center">Services</h2>
    <div class="row g-4 row-cols-1 row-cols-lg-2">
        <div class="feature col">
            <div
                class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-spotify"></i>
            </div>
            <h3 class="fs-2">Audio Theraphy</h3>
            <p>Terapi audio dikenal sebagai terapi suara atau terapi musik untuk meningkatkan kesehatan fisik, mental,
                dan emosional.
                Ini dapat digunakan untuk mengatasi berbagai masalah, termasuk stres, kecemasan, depresi, trauma, sakit
                kronis, dan insomnia</p>
        </div>
        <div class="feature col">
            <div
                class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-chat-left-dots-fill"></i>
            </div>
            <h3 class="fs-2">Forum Discussion</h3>
            <p>Forum Diskusi adalah forum online tempat pengguna dapat memposting pesan dan terlibat dalam diskusi
                tentang topik atau kelompok topik tertentu.
                Forum ini dikhususkan untuk membahas masalah seputar kesehatan mental dan saling berbagi pikiran</p>
        </div>
        <div class="feature col">
            <div
                class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-heart-pulse-fill"></i>
            </div>
            <h3 class="fs-2">Yoga Theraphy</h3>
            <p>Terapi yoga adalah bentuk terapi yang menggunakan praktik dan prinsip yoga untuk mengatasi masalah
                kesehatan fisik, mental, dan emosional.
                Ini berisi kumpulan video yoga yang bertujuan untuk terapeutik.</p>
        </div>
        <div class="feature col">
            <div
                class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="bi bi-hospital"></i>
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
                                    <p class="lh-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam,
                                        quae consectetur! Fugit repellat sit placeat rerum animi, facilis exercitationem
                                        sunt aliquid magni deserunt eum harum?.</p>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 pt-3">
                                        <img src="/img/photo1.jpeg" class="rounded-circle img-responsive img-fluid">
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="arrow-down d-none d-lg-block"></div>
                                        <h4><strong>Nopals Purnomo</strong></h4>
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aliquid
                                        cum atque, eius velit dolore repellendus libero recusandae accusantium ut
                                        blanditiis sunt modi eveniet asperiores.
                                    </p>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 pt-4">
                                        <img src="/img/photo2.jpg" class="rounded-circle img-responsive img-fluid">
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="arrow-down d-none d-lg-block"></div>
                                        <h4><strong>Esther Zawadi</strong></h4>
                                        <p class="testimonial_subtitle"><span>
                                                digital strategist</span><br>
                                            <span>Vaxa digital</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row p-4">
                                <div class="t-card">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                                        quibusdam libero optio pariatur veniam, expedita ipsa voluptatibus, cum quis,
                                        deserunt qui dolorem porro facere laudantium.</p>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                </div>
                                <div class="row text-lg-start">
                                    <div class="col-sm-2 pt-4 align-items-center">
                                        <img src="/img/photo3.jpg" class="rounded-circle img-responsive img-fluid">
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="arrow-down d-none d-md-block"></div>
                                        <h4><strong>Patrick muriungi</strong></h4>
                                        <p class="testimonial_subtitle"><span>Web Technologist</span><br>
                                            <span>Vaxa digital</span>
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
                            <a href="https://github.com/SriLestariii/" target="_blank"><i class="bi bi-github"></i></a>
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
                            <a href="https://twitter.com/urrrheaven" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/ptridnov.y/" target="_blank"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://github.com/putridnovyy/" target="_blank"><i class="bi bi-github"></i></a>
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
                            <a href="https://github.com/msopiann190/" target="_blank"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End MEMBER -->

<!-- FOOTER -->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-muted">&copy; GHealth, 2022</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-meta"></i></a></li>
        </ul>
    </footer>
</div>
<!-- End FOOTER -->

@endsection
