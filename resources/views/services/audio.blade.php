<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/images/favicon-enhanced.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" text="text/CSS"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet" />
    <title>G-Health - Audio Therapy</title>

    <link rel="stylesheet" href="../css/audio.css" />
</head>

<style>
    .nature-sound {
        text-align: center;
        padding: 30px;
    }
</style>

<body onload="myfunction()" id="main">

    <div id="load">
        <div style="background-color: white; height: 25vh; width: 100%; position: relative; top: -70px;"></div>
    </div>

    <div id="back-top-div" class="back-top-wrap">
        <i class="fas fa-arrow-up"></i>
    </div>


    <!-- Navbar Section -->
    <nav>
        <a href="{{ url('/') }}"><img class="audio-logo" src="./img//logo.png" alt="Logo" /></a>

        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="#music" class=".smooth-scroll">MUSIC</a></li>
                <li><a href="#podcasts" class=".smooth-scroll">PODCASTS </a></li>
            </ul>
        </div>
        <div class="hamburger" id="ham">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z">
                </path>
            </svg>
        </div>
    </nav>

    <!-- Mobile Layout Navbar -->
    <div class="menu" id="menu">
        <ul class="menu-link">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a class="close" href="#music">MUSIC</a></li>
            <li><a class="close" href="#podcasts">PODCASTS </a></li>
            <li><a class="close" href="#audiobooks">AUDIOBOOKS </a></li>
        </ul>
    </div>
    <!-- Mobile Layout Navbar Ends Here -->

    <!-- Navbar Section Ends Here -->

    <div class="menu" id="menu">
        <ul class="menu-link">
            <li><a href="/index.html">HOME</a></li>
            <li><a href="#music">MUSIC</a></li>
            <li><a href="#podcasts">PODCASTS</a></li>
            <li><a href="#audiobooks">AUDIOBOOKS</a></li>
        </ul>
    </div>


    <!-- Header Section-->
    <header>
        <div class="filter"></div>
        <div class="center">
            <h1 id="title" data-aos="fade-up" data-aos-duration="800">
                Welcome to Our <br /><span class="heading-span">Audio Therapy</span>
            </h1>
            <h3 id="subtitle" data-aos="fade-up" data-aos-duration="800">
                Mendengarkan musik dapat mengembalikan dan menambah mood anda.
            </h3>
        </div>
    </header>
    <!-- Header Section Ends here -->

    <!-- Music Section-->
    <section id="music">
        <h1 class="section-headings">Music</h1>
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000" class="collection">
                <h2>Accompany Study</h2>
                <div class="playlist">
                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/playlist/5O820RhPBctoZrfTdx5YVB?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="collection">
                <h2>It's Gonna be Okay</h2>
                <div class="playlist">
                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/playlist/0y7T8MH2qhbOWo13zzlMci?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="2000" class="collection">
                <h2>Deserve Happy</h2>
                <div class="playlist">
                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/playlist/3rTkszRudlAvztkJQcm11Y?utm_source=generator"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Music Section Ends Here-->

    <hr />

    <!-- Podcasts Section-->
    <section id="podcasts">
        <h1 class="section-headings">PODCAST</h1>
        <div class="collection">
            <div data-aos="fade-up" data-aos-duration="800" class="show">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/show/7prgp80n4pd49sZ3j9per6?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
            <div data-aos="fade-up" data-aos-duration="800" class="show">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/show/5vHokTsTmdlLBs1uPgDGN6/video?utm_source=generator"
                    width="100%" height="351" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
            <div data-aos="fade-up" data-aos-duration="800" class="show">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/show/5yrdpRPrqiEcjrptBwIUYL?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- Podcasts Section Ends Here -->

    <hr />

    <script type="text/javascript" src="../js/scrollsmooth.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        const ham = document.getElementById("ham");
        const menu = document.getElementById("menu");
        const close = document.querySelectorAll('.close');
        const closeMenu = () => {
            if (menu.classList.contains("open")) {
                menu.classList.remove("open");

                console.log("open");
            }
            ham.innerHTML =
                '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>'
        }

        const toggleMenu = () => {
            if (menu.classList.contains("open")) {
                menu.classList.remove("open");
                ham.innerHTML =
                    '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>'
                console.log("open");
            } else {
                menu.classList.add("open");
                ham.innerHTML =
                    '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg>'
                console.log("close");
            }
        };
        ham.addEventListener("click", toggleMenu);
        close.forEach(ele => {
            ele.addEventListener("click", closeMenu);
        })
    </script>
    <script>
        var preloader = document.getElementById('load');
        var scroll = document.getElementById('main');

        function myfunction() {
            preloader.style.display = 'none';
            scroll.style.overflow = 'scroll';

            const backTopElement = document.getElementById("back-top-div");
            const minScolledAmountToBackTop = 800;

            window.addEventListener("scroll", () => {
                if (window.scrollY < minScolledAmountToBackTop) {
                    backTopElement.classList.add("hidden");
                } else {
                    backTopElement.classList.remove("hidden");
                }
            });

            const backTop = () => {
                window.scrollTo(0, 0);
            };

            backTopElement.addEventListener("click", backTop);
            ham.addEventListener("click", toggleMenu);

        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>

</html>
