<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G-Health Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap);

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: 0;
            outline: none;
        }

        * {
            font-family: Rubik, sans-serif
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        html {
            font-size: 16px
        }

        @media screen and (max-width: 768px) {
            html {
                font-size: 15px
            }
        }

        @media screen and (max-width: 465px) {
            html {
                font-size: 14px
            }
        }

        body {
            background: #202020;
        }

        .contact {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100vw;
            min-height: 100vh;
            background: linear-gradient(180deg, #202020 0%, rgba(32, 32, 32, 0.2) 50%, #202020 100%), url(https://images.unsplash.com/photo-1567359781514-3b964e2b04d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1468&q=80);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .contact-title {
            color: #CCCCCC;
            font-size: 2.5rem;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            padding: 1rem;
            gap: 1rem;
            border: 1px solid #602DFF;
            border-radius: 1rem;
            background: #252525;
            max-width: 375px;
            width: 100%;
        }

        label {
            display: flex;
            flex-direction: column;
            gap: .5rem;
            color: #ccc;
        }

        label input,
        label textarea {
            background: #202020;
            padding: .75rem;
            font-size: 1rem;
            border-radius: .5rem;
            color: #e5e5e5;
            border: 1px solid transparent;
            transition: all .25s ease 0s
        }

        label textarea {
            max-width: 100%;
            max-height: 200px;
            min-width: 200px;
            min-height: 100px;
        }

        .send-btn {
            background: linear-gradient(90deg, #602DFF 0%, #170055 100%);
            padding: .75rem;
            font-size: 1rem;
            font-weight: 600;
            color: #CCC;
            border-radius: .5rem;
            cursor: pointer;
        }

        label input:hover,
        label textarea:hover,
        label input:focus,
        label textarea:focus {
            border-color: #602DFF;
            box-shadow: 0 0 0 3px #602DFF80;
        }

        .send-btn:hover,
        .send-btn:focus {
            background: linear-gradient(90deg, #602DFF 75%, #170055 100%);
        }

        @media screen and (max-width: 900px) {
            .contact {
                flex-direction: column;
                gap: 1rem;
            }

            .contact-title {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="contact">
        <h2 class="contact-title">
            Ada tanggapan?<br>
            Kami dengan senang hati <br>
            mendengarkan.
        </h2>
        <div class="contact-form">
            <label for="name">
                <span class="input-name">
                    Name:
                </span>
                <input type="text" name="name" id="name" class="name">
            </label>
            <label for="email">
                <span class="input-name">
                    Email address:
                </span>
                <input type="text" name="email" id="email" class="email">
            </label>
            <label for="project-info">
                <span class="input-name">
                    Message:
                </span>
                <textarea name="project-info" id="project-info" class="project-info"></textarea>
            </label>
            <button class="btn send-btn">
                Send
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
