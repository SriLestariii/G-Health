@extends('layouts.app')

@section('content')
<!-- INI ABOUT US -->
<div class="pt-3 text-center" id="hero">
    <h1 class="display-4 fw-bold">GHEALTH</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
            most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <a href="{{ url('/login') }}" class="btn btn-primary btn-lg px-4 me-sm-3" target="_blank">Get Started</a>
        </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;"></div>
</div>

<!-- INI SERVICES -->
<div class="container px-4 py-5" id="services">
    <h2 class="pb-2">Services</h2>
    <div class="row g-4 row-cols-1 row-cols-lg-2">
        <div class="feature col">
            <h3 class="fs-2">Audio Theraphy</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
            </a>
        </div>
        <div class="feature col">
            <h3 class="fs-2">Talking Theraphy</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
            </a>
        </div>
        <div class="feature col">
            <h3 class="fs-2">Spritual Theraphy</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
            </a>
        </div>
        <div class="feature col">
            <h3 class="fs-2">Consult A Doctor</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link d-inline-flex align-items-center">
                Call to action
            </a>
        </div>
    </div>
</div>

<!-- INI MEMBER -->
<div class="container" id="member">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sri Lestari</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Anisa Theryana</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Putri Ade</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sopian</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INI FOOTER -->
<div class="container" id="footer">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <img src="img/Logo.png" alt="" srcset="" style="width: 100px;">
            </a>
            <p class="text-muted">&copy; 2022</p>
        </div>

        <div class="col mb-3"></div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-house"></i>
                        Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-bars"></i>
                        Services</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-solid fa-circle-info"></i> About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Services</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-solid fa-podcast"></i> Audio</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-solid fa-headphones"></i> Talking</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-peace"></i>
                        Spiritual</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-solid fa-user-doctor"></i> Consult</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-solid fa-users-rectangle"></i> Forum</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Social</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-brands fa-instagram"></i> Instagram</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-brands fa-twitter"></i> Twitter</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i
                            class="fa-brands fa-github"></i> Github</a></li>
            </ul>
        </div>
    </footer>
</div>

@endsection
