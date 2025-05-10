<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RAPS</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/Logo R.svg') }}" type="image/x-icon">
    <!-- Bootstrap icons-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            /* font-family: "Open Sans", sans-serif; */
            /* font-size: 24px; */
            font-weight: 300;
            /* overflow: hidden; */
        }

        .flip-card-3D-wrapper {
            width: 900px;
            /* Set sesuai ukuran yang diinginkan */
            height: 400px;
            position: relative;
            perspective: 900px;
            margin: 0 auto;
            /* width: 300px;
            height: 400px;
            max-width: 300px;
            max-height: 500px;
            position: relative;
            perspective: 900px;
            margin: 0 auto; */
        }

        #flip-card {
            width: 100%;
            height: 100%;
            text-align: center;
            /* margin: 50px auto; */
            position: absolute;
            transition: all 1s ease-in-out;
            transform-style: preserve-3d;
        }

        .do-flip {
            transform: rotateY(-180deg);
        }

        #flip-card-btn-turn-to-back,
        #flip-card-btn-turn-to-front {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 40px;
            height: 40px;
            background: white;
            cursor: pointer;
            visibility: hidden;
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
            font-size: 0.7em;
            padding: 0;
            color: grey;
            border: 1px solid grey;
        }

        #flip-card .flip-card-front,
        #flip-card .flip-card-back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            z-index: 2;
            /* box-shadow: none; */
            /* Hapus atau kurangi bayangan */
        }

        #flip-card .flip-card-front {
            background: lightgreen;
            border: 1px solid grey;
        }

        #flip-card .flip-card-back {
            background: lightblue;
            border: 1px solid grey;
            transform: rotateY(180deg);
        }

        #flip-card .flip-card-front p,
        #flip-card .flip-card-back p {
            color: grey;
            display: block;
            position: absolute;
            top: 40%;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    @include('includes.navbar')

    {{-- Certificate --}}
    @include('certificate.show')

    {{-- footer --}}
    @include('includes.footer')

    @include('components.tawk')

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById("flip-card-btn-turn-to-back").style.visibility =
                "visible";
            document.getElementById("flip-card-btn-turn-to-front").style.visibility =
                "visible";

            document.getElementById("flip-card-btn-turn-to-back").onclick = function() {
                document.getElementById("flip-card").classList.toggle("do-flip");
            };

            document.getElementById("flip-card-btn-turn-to-front").onclick = function() {
                document.getElementById("flip-card").classList.toggle("do-flip");
            };
        });
    </script>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.utils.toArray(".cardCont").forEach(function(card) {
                gsap.set(card, {
                    transformStyle: "preserve-3d",
                    transformPerspective: 1000
                });
                const q = gsap.utils.selector(card);
                const front = q(".cardFront");
                const back = q(".cardBack");

                gsap.set(back, {
                    rotationY: -180
                });

                const tl = gsap
                    .timeline({
                        paused: true
                    })
                    .to(front, {
                        duration: 1,
                        rotationY: 180
                    })
                    .to(back, {
                        duration: 1,
                        rotationY: 0
                    }, 0)
                    .to(card, {
                        z: 50
                    }, 0)
                    .to(card, {
                        z: 0
                    }, 0.5);
                card.addEventListener("mouseenter", function() {
                    tl.play();
                });
                card.addEventListener("mouseleave", function() {
                    tl.reverse();
                });
            });
        });
    </script> --}}
</body>

</html>
