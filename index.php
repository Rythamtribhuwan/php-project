<?php
// VIVAHVISTA - Indian Destination Wedding Website
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>VIVAHVISTA | Where Destinations Meet Forever</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #fffaf5;
        }

        .serif {
            font-family: 'Playfair Display', serif;
        }

        .hero-image {
            transition: opacity 0.7s ease;
        }

        .destination-card,
        .moment-card {
            transition: all 0.35s ease;
        }

        .destination-card:hover,
        .moment-card:hover {
            transform: translateY(-8px);
        }

        .gold-line {
            width: 80px;
            height: 3px;
            background: #d4a017;
            margin: 18px auto;
        }

        .glass {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(10px);
        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="fixed top-0 left-0 right-0 z-50">

    <nav class="bg-black/60 backdrop-blur-md
                border-b border-white/10">

        <div class="max-w-7xl mx-auto
                    px-6 py-4
                    flex items-center
                    justify-between">

            <a href="#home"
               class="text-white">

                <div class="text-2xl md:text-3xl
                            serif font-bold
                            tracking-wide">

                    VIVAH<span class="text-yellow-400">VISTA</span>

                </div>

                <div class="text-[9px]
                            tracking-[3px]
                            text-gray-300">

                    WHERE DESTINATIONS MEET FOREVER

                </div>

            </a>


            <div class="hidden md:flex
                        items-center gap-8
                        text-white text-sm">

                <a href="#home"
                   class="hover:text-yellow-400">
                    Home
                </a>

                <a href="#destinations"
                   class="hover:text-yellow-400">
                    Destinations
                </a>

                <a href="#moments"
                   class="hover:text-yellow-400">
                    Wedding Moments
                </a>

                <a href="#packages"
                   class="hover:text-yellow-400">
                    Packages
                </a>

                <a href="#about"
                   class="hover:text-yellow-400">
                    About
                </a>

                <a href="booking.php"
                   class="bg-yellow-400
                          text-black
                          px-5 py-2
                          rounded-full
                          font-semibold">

                    Plan Your Wedding

                </a>

            </div>

        </div>

    </nav>

</header>



<!-- =====================================================
     HERO
===================================================== -->

<section id="home"
         class="relative h-screen
                min-h-[700px]
                overflow-hidden">

    <img id="heroImage"

         src="https://images.pexels.com/photos/21008995/pexels-photo-21008995.jpeg?auto=compress&cs=tinysrgb&w=2000"

         alt="Maharashtrian Indian Wedding Couple"

         class="hero-image absolute
                inset-0
                w-full h-full
                object-cover">


    <div class="absolute inset-0
                bg-gradient-to-r
                from-black/85
                via-black/55
                to-black/20">
    </div>


    <div class="relative z-10
                h-full
                flex items-center">

        <div class="max-w-7xl
                    mx-auto
                    px-6
                    w-full">

            <div class="max-w-3xl
                        text-white
                        pt-20">

                <p class="text-yellow-300
                          font-semibold
                          tracking-[4px]
                          text-sm md:text-base">

                    MAHARASHTRIAN DESTINATION WEDDINGS

                </p>


                <h1 class="serif
                           text-5xl
                           md:text-7xl
                           font-bold
                           leading-tight
                           mt-5">

                    Where Love Meets

                    <span class="text-yellow-300">
                        Tradition
                    </span>

                </h1>


                <p class="text-gray-200
                          text-lg
                          md:text-xl
                          mt-6
                          leading-relaxed">

                    Experience the beauty of
                    Maharashtrian traditions,
                    royal destinations and
                    unforgettable wedding celebrations.

                </p>


                <div class="flex flex-wrap
                            gap-4
                            mt-9">

                    <a href="#destinations"
                       class="bg-yellow-400
                              hover:bg-yellow-300
                              text-black
                              px-7 py-3
                              rounded-full
                              font-semibold">

                        Explore Destinations →

                    </a>


                    <a href="booking.php"
                       class="border border-white
                              hover:bg-white
                              hover:text-black
                              px-7 py-3
                              rounded-full
                              font-semibold">

                        Plan Your Wedding

                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- Slider Buttons -->

    <button onclick="previousSlide()"
            class="absolute
                   left-5
                   top-1/2
                   -translate-y-1/2
                   z-20
                   w-12 h-12
                   rounded-full
                   bg-black/50
                   hover:bg-black/70
                   text-white
                   text-3xl">

        ‹

    </button>


    <button onclick="nextSlide()"
            class="absolute
                   right-5
                   top-1/2
                   -translate-y-1/2
                   z-20
                   w-12 h-12
                   rounded-full
                   bg-black/50
                   hover:bg-black/70
                   text-white
                   text-3xl">

        ›

    </button>


    <!-- Slider Dots -->

    <div class="absolute
                bottom-8
                left-1/2
                -translate-x-1/2
                z-20
                flex gap-3">

        <button class="dot
                       w-3 h-3
                       rounded-full
                       bg-white">
        </button>

        <button class="dot
                       w-3 h-3
                       rounded-full
                       bg-white/50">
        </button>

        <button class="dot
                       w-3 h-3
                       rounded-full
                       bg-white/50">
        </button>

        <button class="dot
                       w-3 h-3
                       rounded-full
                       bg-white/50">
        </button>

    </div>

</section>



<!-- =====================================================
     INTRO
===================================================== -->

<section class="py-20 px-6">

    <div class="max-w-4xl mx-auto
                text-center">

        <p class="text-yellow-600
                  font-semibold
                  tracking-[3px]">

            VIVAHVISTA

        </p>

        <h2 class="serif
                   text-4xl md:text-5xl
                   font-bold
                   text-gray-900
                   mt-3">

            Your Dream Wedding,
            Your Perfect Destination

        </h2>

        <div class="gold-line"></div>

        <p class="text-gray-600
                  leading-8
                  mt-6">

            From royal palaces to peaceful beaches,
            VIVAHVISTA brings together beautiful
            Indian wedding destinations where
            tradition, luxury and celebration
            come together.

        </p>

    </div>

</section>



<!-- =====================================================
     DESTINATIONS
===================================================== -->

<section id="destinations"
         class="py-20
                bg-white
                px-6">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">

            <p class="text-yellow-600
                      font-semibold
                      tracking-[3px]">

                FIND YOUR PERFECT VENUE

            </p>

            <h2 class="serif
                       text-4xl md:text-5xl
                       font-bold
                       mt-3">

                Wedding Destinations

            </h2>

            <div class="gold-line"></div>

        </div>


        <div class="grid
                    sm:grid-cols-2
                    lg:grid-cols-5
                    gap-6">


            <!-- BEACH -->

            <div class="destination-card
                        relative
                        h-80
                        rounded-2xl
                        overflow-hidden
                        shadow-xl">

                <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=900&q=85"
                     class="w-full h-full object-cover"
                     alt="Beach Wedding">

                <div class="absolute inset-0
                            bg-black/40">
                </div>

                <div class="absolute
                            bottom-6
                            left-6
                            text-white">

                    <h3 class="serif
                               text-2xl
                               font-bold">

                        Beach

                    </h3>

                    <p class="text-sm">
                        Sunset celebrations
                    </p>

                </div>

            </div>


            <!-- PALACE -->

            <div class="destination-card
                        relative
                        h-80
                        rounded-2xl
                        overflow-hidden
                        shadow-xl">

                <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?auto=format&fit=crop&w=900&q=85"
                     class="w-full h-full object-cover"
                     alt="Royal Palace Wedding">

                <div class="absolute inset-0
                            bg-black/40">
                </div>

                <div class="absolute
                            bottom-6
                            left-6
                            text-white">

                    <h3 class="serif
                               text-2xl
                               font-bold">

                        Royal Palace

                    </h3>

                    <p class="text-sm">
                        Regal celebrations
                    </p>

                </div>

            </div>


            <!-- GARDEN -->

            <div class="destination-card
                        relative
                        h-80
                        rounded-2xl
                        overflow-hidden
                        shadow-xl">

                <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=900&q=85"
                     class="w-full h-full object-cover"
                     alt="Garden Wedding">

                <div class="absolute inset-0
                            bg-black/40">
                </div>

                <div class="absolute
                            bottom-6
                            left-6
                            text-white">

                    <h3 class="serif
                               text-2xl
                               font-bold">

                        Garden

                    </h3>

                    <p class="text-sm">
                        Fresh & romantic
                    </p>

                </div>

            </div>


            <!-- MOUNTAIN -->

            <div class="destination-card
                        relative
                        h-80
                        rounded-2xl
                        overflow-hidden
                        shadow-xl">

                <img src="https://images.unsplash.com/photo-1533104816931-20fa691ff6ca?auto=format&fit=crop&w=900&q=85"
                     class="w-full h-full object-cover"
                     alt="Mountain Wedding">

                <div class="absolute inset-0
                            bg-black/40">
                </div>

                <div class="absolute
                            bottom-6
                            left-6
                            text-white">

                    <h3 class="serif
                               text-2xl
                               font-bold">

                        Mountain

                    </h3>

                    <p class="text-sm">
                        Magical landscapes
                    </p>

                </div>

            </div>


            <!-- LUXURY -->

            <div class="destination-card
                        relative
                        h-80
                        rounded-2xl
                        overflow-hidden
                        shadow-xl">

                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=85"
                     class="w-full h-full object-cover"
                     alt="Luxury Resort Wedding">

                <div class="absolute inset-0
                            bg-black/40">
                </div>

                <div class="absolute
                            bottom-6
                            left-6
                            text-white">

                    <h3 class="serif
                               text-2xl
                               font-bold">

                        Luxury Resorts

                    </h3>

                    <p class="text-sm">
                        Premium celebrations
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     WEDDING MOMENTS
===================================================== -->

<section id="moments"
         class="py-20
                bg-[#fff8f0]
                px-6">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">

            <p class="text-yellow-600
                      font-semibold
                      tracking-[3px]">

                INDIAN WEDDING MOMENTS

            </p>

            <h2 class="serif
                       text-4xl md:text-5xl
                       font-bold
                       mt-3">

                Celebrate Every Ritual

            </h2>

            <div class="gold-line"></div>

        </div>


        <div class="grid
                    sm:grid-cols-2
                    lg:grid-cols-4
                    gap-6">


            <?php

            $moments = [

                [
                    "Haldi",
                    "https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=900&q=85"
                ],

                [
                    "Mehendi",
                    "https://images.unsplash.com/photo-1532712938310-34cb3982ef74?auto=format&fit=crop&w=900&q=85"
                ],

                [
                    "Baraat",
                    "https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=900&q=85"
                ],

                [
                    "Bridal Entry",
                    "https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=900&q=85"
                ],

                [
                    "Jaimala",
                    "https://images.unsplash.com/photo-1606216794074-735e91aa2c92?auto=format&fit=crop&w=900&q=85"
                ],

                [
                    "Wedding Ceremony",
                    "https://images.unsplash.com/photo-1583939003579-730e3918a45a?auto=format&fit=crop&w=900&q=85"
                ],

                [
                    "Maharashtrian Wedding",
                    "https://images.pexels.com/photos/21008995/pexels-photo-21008995.jpeg?auto=compress&cs=tinysrgb&w=1200"
                ],

                [
                    "Reception",
                    "https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=900&q=85"
                ]

            ];


            foreach ($moments as $moment):

            ?>

                <div class="moment-card
                            bg-white
                            rounded-2xl
                            overflow-hidden
                            shadow-lg">

                    <div class="h-60 overflow-hidden">

                        <img src="<?= $moment[1] ?>"
                             alt="<?= $moment[0] ?>"
                             class="w-full h-full
                                    object-cover
                                    hover:scale-110
                                    transition
                                    duration-700">

                    </div>

                    <div class="p-5">

                        <h3 class="serif
                                   text-2xl
                                   font-bold">

                            <?= $moment[0] ?>

                        </h3>

                        <p class="text-gray-500
                                  text-sm
                                  mt-2">

                            A beautiful moment
                            of your celebration.

                        </p>

                    </div>

                </div>

            <?php endforeach; ?>


        </div>

    </div>

</section>



<!-- =====================================================
     WHY VIVAHVISTA
===================================================== -->

<section class="py-20
                bg-white
                px-6">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-14">

            <p class="text-yellow-600
                      font-semibold
                      tracking-[3px]">

                WHY VIVAHVISTA

            </p>

            <h2 class="serif
                       text-4xl md:text-5xl
                       font-bold
                       mt-3">

                Everything For Your Big Day

            </h2>

            <div class="gold-line"></div>

        </div>


        <div class="grid
                    md:grid-cols-4
                    gap-8">


            <div class="text-center p-7
                        rounded-2xl
                        bg-[#fff8f0]">

                <div class="text-5xl mb-5">
                    👑
                </div>

                <h3 class="serif
                           text-xl
                           font-bold">

                    Royal Venues

                </h3>

                <p class="text-gray-600
                          text-sm mt-3">

                    Discover elegant
                    destinations for
                    unforgettable celebrations.

                </p>

            </div>


            <div class="text-center p-7
                        rounded-2xl
                        bg-[#fff8f0]">

                <div class="text-5xl mb-5">
                    💍
                </div>

                <h3 class="serif
                           text-xl
                           font-bold">

                    Indian Traditions

                </h3>

                <p class="text-gray-600
                          text-sm mt-3">

                    Celebrate every
                    beautiful Indian ritual
                    with elegance.

                </p>

            </div>


            <div class="text-center p-7
                        rounded-2xl
                        bg-[#fff8f0]">

                <div class="text-5xl mb-5">
                    📸
                </div>

                <h3 class="serif
                           text-xl
                           font-bold">

                    Beautiful Memories

                </h3>

                <p class="text-gray-600
                          text-sm mt-3">

                    Create moments that
                    stay beautiful forever.

                </p>

            </div>


            <div class="text-center p-7
                        rounded-2xl
                        bg-[#fff8f0]">

                <div class="text-5xl mb-5">
                    ✨
                </div>

                <h3 class="serif
                           text-xl
                           font-bold">

                    Premium Planning

                </h3>

                <p class="text-gray-600
                          text-sm mt-3">

                    From venue selection
                    to celebration planning.

                </p>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     PACKAGES
===================================================== -->

<section id="packages"
         class="py-20
                bg-[#21160f]
                text-white
                px-6">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-14">

            <p class="text-yellow-400
                      font-semibold
                      tracking-[3px]">

                WEDDING EXPERIENCES

            </p>

            <h2 class="serif
                       text-4xl md:text-5xl
                       font-bold
                       mt-3">

                Choose Your Celebration

            </h2>

            <div class="gold-line"></div>

        </div>


        <div class="grid
                    md:grid-cols-3
                    gap-8">


            <div class="glass
                        rounded-2xl
                        p-8
                        border border-white/10">

                <p class="text-yellow-400
                          font-semibold">

                    INTIMATE

                </p>

                <h3 class="serif
                           text-3xl
                           font-bold
                           mt-3">

                    Traditional

                </h3>

                <p class="text-gray-300
                          mt-4
                          leading-7">

                    Perfect for couples
                    who want an elegant
                    and intimate Indian
                    wedding celebration.

                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-7
                          border border-yellow-400
                          text-yellow-400
                          px-6 py-3
                          rounded-full">

                    Enquire Now

                </a>

            </div>


            <div class="glass
                        rounded-2xl
                        p-8
                        border border-yellow-400/50
                        scale-105">

                <p class="text-yellow-400
                          font-semibold">

                    MOST POPULAR

                </p>

                <h3 class="serif
                           text-3xl
                           font-bold
                           mt-3">

                    Royal Celebration

                </h3>

                <p class="text-gray-300
                          mt-4
                          leading-7">

                    A grand destination
                    wedding experience
                    inspired by India's
                    royal traditions.

                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-7
                          bg-yellow-400
                          text-black
                          px-6 py-3
                          rounded-full
                          font-semibold">

                    Plan This Wedding

                </a>

            </div>


            <div class="glass
                        rounded-2xl
                        p-8
                        border border-white/10">

                <p class="text-yellow-400
                          font-semibold">

                    LUXURY

                </p>

                <h3 class="serif
                           text-3xl
                           font-bold
                           mt-3">

                    Grand Destination

                </h3>

                <p class="text-gray-300
                          mt-4
                          leading-7">

                    A complete premium
                    wedding experience
                    at breathtaking
                    destinations.

                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-7
                          border border-yellow-400
                          text-yellow-400
                          px-6 py-3
                          rounded-full">

                    Enquire Now

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     ABOUT
===================================================== -->

<section id="about"
         class="py-20
                bg-[#fff8f0]
                px-6">

    <div class="max-w-6xl mx-auto
                grid md:grid-cols-2
                gap-12
                items-center">


        <div>

            <p class="text-yellow-600
                      font-semibold
                      tracking-[3px]">

                ABOUT VIVAHVISTA

            </p>

            <h2 class="serif
                       text-4xl md:text-5xl
                       font-bold
                       mt-4">

                Your Celebration.
                Your Tradition.
                Your Story.

            </h2>

            <div class="gold-line
                        !mx-0">

            </div>

            <p class="text-gray-600
                      leading-8">

                VIVAHVISTA is created for
                couples who dream of celebrating
                their wedding somewhere truly
                unforgettable.

            </p>

            <p class="text-gray-600
                      leading-8
                      mt-4">

                Whether you imagine a royal
                palace, peaceful beach,
                mountain escape or luxurious
                resort, discover destinations
                designed for beautiful Indian
                wedding celebrations.

            </p>

        </div>


        <div class="rounded-3xl    currentSlide =
            slides.length - 1;

    }

    changeSlide(currentSlide);

}


setInterval(function() {

    nextSlide();

}, 5000);

</script>


</body>

</html>
                    overflow-hidden
                    shadow-2xl">

            <img src="https://images.pexels.com/photos/38961893/pexels-photo-38961893.jpeg?auto=compress&cs=tinysrgb&w=1400"
                 alt="Indian Wedding Couple"
                 class="w-full
                        h-[500px]
                        object-cover">

        </div>

    </div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="relative
                py-24
                overflow-hidden">

    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1800&q=85"
         class="absolute inset-0
                w-full h-full
                object-cover">

    <div class="absolute inset-0
                bg-black/65">
    </div>


    <div class="relative z-10
                max-w-4xl
                mx-auto
                text-center
                px-6
                text-white">

        <p class="text-yellow-400
                  tracking-[4px]
                  font-semibold">

            YOUR DREAM WEDDING STARTS HERE

        </p>

        <h2 class="serif
                   text-4xl md:text-6xl
                   font-bold
                   mt-4">

            Let's Create
            Something Beautiful

        </h2>

        <p class="text-gray-200
                  mt-6
                  text-lg">

            Find your destination.
            Celebrate your traditions.
            Create memories forever.

        </p>

        <a href="booking.php"
           class="inline-block
                  mt-8
                  bg-yellow-400
                  text-black
                  px-8 py-4
                  rounded-full
                  font-bold">

            Start Planning →

        </a>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="bg-black
               text-white
               py-10
               px-6">

    <div class="max-w-7xl
                mx-auto
                text-center">

        <div class="serif
                    text-3xl
                    font-bold">

            VIVAH<span class="text-yellow-400">
                VISTA
            </span>

        </div>

        <p class="text-gray-400
                  mt-2">

            Where Destinations Meet Forever

        </p>


        <div class="flex
                    justify-center
                    flex-wrap
                    gap-6
                    mt-6
                    text-sm
                    text-gray-400">

            <a href="#home"
               class="hover:text-yellow-400">
                Home
            </a>

            <a href="#destinations"
               class="hover:text-yellow-400">
                Destinations
            </a>

            <a href="#moments"
               class="hover:text-yellow-400">
                Wedding Moments
            </a>

            <a href="#packages"
               class="hover:text-yellow-400">
                Packages
            </a>

            <a href="contact.php"
               class="hover:text-yellow-400">
                Contact
            </a>

        </div>


        <div class="border-t
                    border-white/10
                    mt-8
                    pt-6">

            <p class="text-gray-500
                      text-sm">

                © <?= date('Y') ?>
                VIVAHVISTA.
                All Rights Reserved.

            </p>

            <p class="text-yellow-400
                      mt-2
                      font-medium">

                Made by Rytham ❤️

            </p>

        </div>

    </div>

</footer>



<!-- =====================================================
     HERO SLIDER JAVASCRIPT
===================================================== -->

<script>

const slides = [

    "https://images.pexels.com/photos/21008995/pexels-photo-21008995.jpeg?auto=compress&cs=tinysrgb&w=2000",

    "https://images.pexels.com/photos/38961893/pexels-photo-38961893.jpeg?auto=compress&cs=tinysrgb&w=2000",

    "https://images.pexels.com/photos/37850754/pexels-photo-37850754.jpeg?auto=compress&cs=tinysrgb&w=2000",

    "https://images.pexels.com/photos/28210869/pexels-photo-28210869.jpeg?auto=compress&cs=tinysrgb&w=2000"

];


let currentSlide = 0;


const heroImage =
    document.getElementById("heroImage");

const dots =
    document.querySelectorAll(".dot");


function showSlide(index) {

    currentSlide = index;

    heroImage.style.opacity = "0";


    setTimeout(() => {

        heroImage.src =
            slides[currentSlide];

        heroImage.style.opacity = "1";

    }, 300);


    dots.forEach((dot, i) => {

        if (i === currentSlide) {

            dot.classList.remove(
                "bg-white/50"
            );

            dot.classList.add(
                "bg-white"
            );

        } else {

            dot.classList.remove(
                "bg-white"
            );

            dot.classList.add(
                "bg-white/50"
            );

        }

    });

}


function nextSlide() {

    currentSlide =
        (currentSlide + 1) %    currentSlide =
            slides.length - 1;

    }

    changeSlide(currentSlide);

}


setInterval(function() {    currentSlide =
            slides.length - 1;

    }

    changeSlide(currentSlide);

}


setInterval(function() {

    nextSlide();

}, 5000);

</script>


</body>

</html>

    nextSlide();

}, 5000);

</script>


</body>

</html>
        slides.length;

    showSlide(currentSlide);

}


function previousSlide() {

    currentSlide =
        (currentSlide - 1 +
         slides.length) %
        slides.length;

    showSlide(currentSlide);

}


dots.forEach((dot, index) => {

    dot.addEventListener(
        "click",
        () => showSlide(index)
    );

});


setInterval(
    nextSlide,
    5000
);

</script>


</body>
</html>
