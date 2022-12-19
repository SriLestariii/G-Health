<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        /* SERVICES SECTION */
        #services {
            background-color: #092e3c;
            width: 100%;
        }

        #services h1 {
            font-size: 50px;
            text-align: center;
            font-weight: 800;
            font-family: "Montserrat";
            padding-top: 2rem;
            font-weight: bolder;
            color: white;
        }

        .container {
            padding: 3rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .responsive {
            color: whitesmoke;
            width: 30%;
            border: 1px solid rgba(245, 245, 245, 0.146);
            border-radius: 1.5rem;
            text-align: center;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-content: space-between;
            margin-top: 28px;
        }

        .round-image {
            object-fit: cover;
        }

        .responsive .round-image img {
            width: 12rem;
            border-radius: 50%;
        }

        .responsive h2 {
            margin-top: 1.2rem;
        }

        .responsive p {
            width: 70%;
            word-wrap: break-word;
            margin: 1rem auto;
        }

        .responsive a {
            display: inline-block;
            width: 100%;
            text-decoration: none;
            color: black;
            background-color: rgb(255, 255, 255);
            border: 1px solid black;
            padding: 0.5em;
            border-radius: 0.5em;
            transition: 0.3s ease-in-out;
        }

        .responsive a:hover {
            font-weight: bolder;
            background-color: #02142d;
            color: white;
            border-color: white;
        }

        .description {
            min-height: 55%;
            /* background-color: wheat; */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        @media screen and (max-width: 900px) {
            .container {
                flex-direction: column;
            }

            .responsive {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- SERVICES SECTION -->
    <div id="services">
        <h1>Our Services</h1>
        <div data-aos="zoom-in" data-aos-duration="800" class="container">
            <div class="responsive audio">
                <div class="round-image">
                    <img src="./img/audio.png" alt="audio" loading="lazy" />
                </div>
                <div class="description">
                    <h2>Audio Therapy</h2>
                    <p>
                        Mendengarkan musik & file audio dapat mencerahkan suasana hati anda.
                    </p>
                    <a target="_blank" href="{{ url('/audio') }}">
                        Let's Explore
                    </a>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-duration="800" class="responsive talk">
                <div class="round-image">
                    <img src="./img/talking.png" loading="lazy" alt="talking" />
                </div>
                <div class="description">
                    <h2>Forum Discussion</h2>
                    <p>
                        Saling berbagi cerita dengan pengguna lain.
                    </p>
                    <a target="_blank" href="{{ url('/forum') }}">
                        Let's Explore
                    </a>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-duration="800" class="responsive doctor">
                <div class="round-image">
                    <img src="./img/doctor.png" alt="doctor" loading="lazy" />
                </div>
                <div class="description">
                    <h2>Consult A Doctor</h2>
                    <p>
                        Berkonsultasi dengan dokter spesialis.
                    </p>
                    <a target="_blank" href="https://www.halodoc.com/tanya-dokter/cari?query=psikiater" target="_blank">
                        Let's Explore
                    </a>
                </div>
            </div>
            <div class="responsive spiritual">
                <div class="round-image">
                    <img src="./img/signupill.png" alt="spiritual" loading="lazy" />
                </div>
                <div class="description">
                    <h2>Yoga Therapy</h2>
                    <p>
                        Dapat merileksasikan pikiran dan tubuh anda.
                    </p>
                    <a target="_blank" href="{{ url('/yoga') }}">
                        Let's Explore
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
