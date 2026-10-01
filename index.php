<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VIVAHVISTA | Indian Destination Weddings</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .hero-image {
            transition: opacity 0.6s ease-in-out;
        }

        .glass {
            background: rgba(30, 10, 20, 0.45);
            backdrop-filter: blur(10px);
        }

        .gold {
            color: #d4af37;
        }

        .gold-bg {
            background: #d4af37;
        }

        .maroon {
            background: #4b102c;
        }

        .card-hover {
            transition: 0.4s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
        }
    </style>
</head>


<body class="bg-[#fff8ed] text-gray-800">


<!-- ================= NAVBAR ================= -->

<nav class="fixed top-0 left-0 w-full z-50 glass text-white">

    <div class="max-w-7xl mx-auto px-6 py-4
                flex justify-between items-center">

        <!-- LOGO -->

        <div>

            <h1 class="text-2xl md:text-3xl
                       font-bold tracking-widest text-yellow-300">

                VIVAHVISTA

            </h1>

            <p class="text-xs tracking-widest">
                WHERE DESTINATIONS MEET FOREVER
            </p>

        </div>


        <!-- MENU -->

        <div class="hidden lg:flex items-center gap-7 text-sm">

            <a href="index.php"
               class="hover:text-yellow-300">
                Home
            </a>

            <a href="#destinations"
               class="hover:text-yellow-300">
                Destinations
            </a>

            <a href="#moments"
               class="hover:text-yellow-300">
                Wedding Moments
            </a>

            <a href="#venues"
               class="hover:text-yellow-300">
                Venues
            </a>

            <a href="#packages"
               class="hover:text-yellow-300">
                Packages
            </a>

            <a href="#about"
               class="hover:text-yellow-300">
                About Us
            </a>

            <a href="contact.php"
               class="hover:text-yellow-300">
                Contact
            </a>

            <a href="booking.php"
               class="bg-yellow-400 text-black
                      px-5 py-2 rounded-full
                      font-semibold hover:bg-yellow-300">

                Plan Your Wedding

            </a>

        </div>

    </div>

</nav>



<!-- ================= HERO SLIDER ================= -->

<section class="relative h-screen overflow-hidden">


    <!-- SLIDER IMAGE -->

    <img
        id="heroImage"
        src="https://images.unsplash.com/photo-1606800052052-a08af7148866?auto=format&fit=crop&w=2200&q=90"
        class="hero-image absolute inset-0
               w-full h-full object-cover"
        alt="Indian Destination Wedding"
    >


    <!-- OVERLAY -->

    <div class="absolute inset-0
                bg-gradient-to-r
                from-black/75
                via-black/40
                to-black/20">
    </div>



    <!-- HERO CONTENT -->

    <div class="relative z-10 h-full
                flex items-center">

        <div class="max-w-7xl mx-auto
                    px-6 w-full">

            <div class="max-w-2xl text-white">


                <p class="text-yellow-300
                          tracking-widest
                          font-semibold mb-4">

                    INDIAN DESTINATION WEDDINGS

                </p>


                <h2 class="text-5xl md:text-7xl
                           font-serif font-bold
                           leading-tight">

                    Your Dream Wedding

                    <span class="text-yellow-300">
                        In Beautiful Destinations
                    </span>

                </h2>


                <p class="text-lg md:text-xl
                          text-gray-200
                          mt-6">

                    From royal palaces to peaceful beaches,
                    we create unforgettable Indian weddings
                    in extraordinary destinations.

                </p>


                <div class="mt-8 flex flex-wrap gap-4">


                    <a href="#destinations"
                       class="bg-yellow-400
                              text-black
                              px-7 py-3
                              rounded-full
                              font-bold
                              hover:bg-yellow-300
                              transition">

                        Explore Destinations →

                    </a>


                    <a href="booking.php"
                       class="border border-white
                              px-7 py-3
                              rounded-full
                              hover:bg-white
                              hover:text-black
                              transition">

                        Plan Your Wedding

                    </a>

                </div>

            </div>

        </div>

    </div>



    <!-- LEFT ARROW -->

    <button
        onclick="previousSlide()"
        class="absolute left-5
               top-1/2
               -translate-y-1/2
               w-12 h-12
               rounded-full
               bg-black/40
               text-white
               text-3xl
               hover:bg-black/70
               z-20">

        ‹

    </button>



    <!-- RIGHT ARROW -->

    <button
        onclick="nextSlide()"
        class="absolute right-5
               top-1/2
               -translate-y-1/2
               w-12 h-12
               rounded-full
               bg-black/40
               text-white
               text-3xl
               hover:bg-black/70
               z-20">

        ›

    </button>



    <!-- DOTS -->

    <div
        class="absolute bottom-8
               left-1/2
               -translate-x-1/2
               flex gap-3 z-20">

        <button onclick="changeSlide(0)"
                class="dot w-3 h-3
                       rounded-full bg-white">
        </button>

        <button onclick="changeSlide(1)"
                class="dot w-3 h-3
                       rounded-full bg-white/50">
        </button>

        <button onclick="changeSlide(2)"
                class="dot w-3 h-3
                       rounded-full bg-white/50">
        </button>

        <button onclick="changeSlide(3)"
                class="dot w-3 h-3
                       rounded-full bg-white/50">
        </button>

        <button onclick="changeSlide(4)"
                class="dot w-3 h-3
                       rounded-full bg-white/50">
        </button>

    </div>

</section>



<!-- ================= DESTINATIONS ================= -->

<section id="destinations"
         class="py-20 bg-[#fff8ed]">


    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center">

            <p class="text-[#a33a5e]
                      tracking-widest
                      font-semibold">

                EXPLORE OUR

            </p>

            <h2 class="text-4xl md:text-5xl
                       font-bold
                       text-[#681b40]
                       mt-2">

                Popular Wedding Destinations

            </h2>

            <p class="text-gray-600 mt-3">

                Unique places. Unforgettable celebrations.

            </p>

        </div>



        <div class="grid md:grid-cols-2
                    lg:grid-cols-5
                    gap-5 mt-12">


            <!-- BEACH -->

            <div class="relative
                        h-80 rounded-2xl
                        overflow-hidden
                        card-hover shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1544078751-58fee2d8a03b?auto=format&fit=crop&w=900&q=85"
                    class="w-full h-full object-cover"
                    alt="Beach Wedding">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <div class="absolute bottom-5
                            left-5 text-white">

                    <h3 class="text-xl font-bold">
                        Beach Weddings
                    </h3>

                    <p class="text-sm">
                        Sun, Sand & Forever
                    </p>

                </div>

            </div>



            <!-- PALACE -->

            <div class="relative
                        h-80 rounded-2xl
                        overflow-hidden
                        card-hover shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=900&q=85"
                    class="w-full h-full object-cover"
                    alt="Royal Palace Wedding">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <div class="absolute bottom-5
                            left-5 text-white">

                    <h3 class="text-xl font-bold">
                        Royal Palace
                    </h3>

                    <p class="text-sm">
                        Live Like Royalty
                    </p>

                </div>

            </div>



            <!-- GARDEN -->

            <div class="relative
                        h-80 rounded-2xl
                        overflow-hidden
                        card-hover shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=900&q=85"
                    class="w-full h-full object-cover"
                    alt="Garden Wedding">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <div class="absolute bottom-5
                            left-5 text-white">

                    <h3 class="text-xl font-bold">
                        Garden Weddings
                    </h3>

                    <p class="text-sm">
                        Nature's Embrace
                    </p>

                </div>

            </div>



            <!-- MOUNTAIN -->

            <div class="relative
                        h-80 rounded-2xl
                        overflow-hidden
                        card-hover shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=900&q=85"
                    class="w-full h-full object-cover"
                    alt="Mountain Wedding">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <div class="absolute bottom-5
                            left-5 text-white">

                    <h3 class="text-xl font-bold">
                        Mountain Weddings
                    </h3>

                    <p class="text-sm">
                        Love At Higher Altitudes
                    </p>

                </div>

            </div>



            <!-- RESORT -->

            <div class="relative
                        h-80 rounded-2xl
                        overflow-hidden
                        card-hover shadow-lg">

                <img
                    src="https://images.unsplash.com/photo-1606216794074-735e91aa2c92?auto=format&fit=crop&w=900&q=85"
                    class="w-full h-full object-cover"
                    alt="Luxury Resort Wedding">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <div class="absolute bottom-5
                            left-5 text-white">

                    <h3 class="text-xl font-bold">
                        Luxury Resorts
                    </h3>

                    <p class="text-sm">
                        Elegance In Every Detail
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ================= INDIAN WEDDING MOMENTS ================= -->

<section id="moments"
         class="py-20
                bg-[#fff0f0]">


    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center">

            <p class="text-[#a33a5e]
                      tracking-widest
                      font-semibold">

                INDIAN WEDDING MOMENTS

            </p>


            <h2 class="text-4xl md:text-5xl
                       font-bold
                       text-[#681b40]
                       mt-2">

                Traditions, Emotions &
                Unforgettable Moments

            </h2>

        </div>



        <div class="grid grid-cols-2
                    md:grid-cols-4
                    gap-5 mt-12">


            <!-- HALDI -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1597157639073-692ea68f6f4c?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Haldi Ceremony">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    🌼 Haldi Ceremony

                </h3>

            </div>



            <!-- MEHENDI -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1610030469983-98e550d6193c?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Mehendi Ceremony">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    🌿 Mehendi Ceremony

                </h3>

            </div>



            <!-- BARAAT -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Baraat">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    🥁 Baraat

                </h3>

            </div>



            <!-- BRIDAL ENTRY -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Bridal Entry">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    👰 Bridal Entry

                </h3>

            </div>



            <!-- JAIMALA -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1607190074257-dd4b7af0309f?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Jaimala">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    💐 Jaimala

                </h3>

            </div>



            <!-- CEREMONY -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Wedding Ceremony">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    🔥 Wedding Ceremony

                </h3>

            </div>



            <!-- MAHARASHTRIAN -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1544078751-58fee2d8a03b?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Maharashtrian Wedding">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    🪔 Maharashtrian Wedding

                </h3>

            </div>



            <!-- RECEPTION -->

            <div class="relative h-72
                        rounded-2xl
                        overflow-hidden
                        group">

                <img
                    src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=800&q=85"
                    class="w-full h-full
                           object-cover
                           group-hover:scale-110
                           transition duration-500"
                    alt="Wedding Reception">

                <div class="absolute inset-0
                            bg-gradient-to-t
                            from-black/80
                            to-transparent">
                </div>

                <h3 class="absolute bottom-5
                           left-5 text-white
                           text-xl font-bold">

                    🎉 Reception

                </h3>

            </div>

        </div>

    </div>

</section>



<!-- ================= WHY VIVAHVISTA ================= -->

<section id="venues"
         class="py-20 bg-[#4b102c]
                text-white">


    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center">

            <p class="text-yellow-300
                      tracking-widest">

                WHY VIVAHVISTA

            </p>

            <h2 class="text-4xl
                       font-bold mt-3">

                We Make Your Celebration Special

            </h2>

        </div>


        <div class="grid md:grid-cols-4
                    gap-8 mt-12">


            <div class="text-center">

                <div class="text-5xl">
                    ❤️
                </div>

                <h3 class="font-bold text-xl mt-4">
                    Trusted Service
                </h3>

                <p class="text-gray-300 mt-2">
                    Beautiful celebrations
                    planned with care.
                </p>

            </div>


            <div class="text-center">

                <div class="text-5xl">
                    🏰
                </div>

                <h3 class="font-bold text-xl mt-4">
                    Premium Venues
                </h3>

                <p class="text-gray-300 mt-2">
                    Handpicked wedding
                    destinations.
                </p>

            </div>


            <div class="text-center">

                <div class="text-5xl">
                    ✨
                </div>

                <h3 class="font-bold text-xl mt-4">
                    Expert Planning
                </h3>

                <p class="text-gray-300 mt-2">
                    From planning to perfection.
                </p>

            </div>


            <div class="text-center">

                <div class="text-5xl">
                    📍
                </div>

                <h3 class="font-bold text-xl mt-4">
                    Across India
                </h3>

                <p class="text-gray-300 mt-2">
                    Your dream destination,
                    anywhere.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ================= PACKAGES ================= -->

<section id="packages"
         class="py-20
                bg-[#fff8ed]">


    <div class="max-w-6xl mx-auto px-6 text-center">


        <p class="text-[#a33a5e]
                  tracking-widest">

            WEDDING PACKAGES

        </p>


        <h2 class="text-4xl
                   font-bold
                   text-[#681b40]
                   mt-2">

            Plan Your Perfect Celebration

        </h2>


        <div class="grid md:grid-cols-3
                    gap-8 mt-12">


            <div class="bg-white
                        rounded-2xl
                        p-8 shadow-lg">

                <div class="text-5xl">
                    🌸
                </div>

                <h3 class="text-2xl
                           font-bold
                           text-[#681b40]
                           mt-4">

                    Classic

                </h3>

                <p class="text-gray-600 mt-3">
                    Beautiful intimate celebrations.
                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-6
                          border border-[#681b40]
                          px-6 py-2
                          rounded-full
                          hover:bg-[#681b40]
                          hover:text-white">

                    Enquire Now

                </a>

            </div>


            <div class="bg-[#681b40]
                        text-white
                        rounded-2xl
                        p-8 shadow-xl
                        scale-105">

                <div class="text-5xl">
                    👑
                </div>

                <h3 class="text-2xl
                           font-bold mt-4">

                    Royal

                </h3>

                <p class="text-gray-200 mt-3">
                    A grand Indian destination wedding.
                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-6
                          bg-yellow-400
                          text-black
                          px-6 py-2
                          rounded-full
                          font-bold">

                    Plan Now

                </a>

            </div>


            <div class="bg-white
                        rounded-2xl
                        p-8 shadow-lg">

                <div class="text-5xl">
                    💎
                </div>

                <h3 class="text-2xl
                           font-bold
                           text-[#681b40]
                           mt-4">

                    Luxury

                </h3>

                <p class="text-gray-600 mt-3">
                    An unforgettable luxury experience.
                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-6
                          border border-[#681b40]
                          px-6 py-2
                          rounded-full
                          hover:bg-[#681b40]
                          hover:text-white">

                    Enquire Now

                </a>

            </div>

        </div>

    </div>

</section>



<!-- ================= CTA ================= -->

<section class="py-20
                bg-[#7b1e1e]
                text-white
                text-center">


    <div class="max-w-4xl mx-auto px-6">


        <h2 class="text-4xl md:text-5xl
                   font-bold">

            Let's Plan Your
            Perfect Day ❤️

        </h2>


        <p class="text-gray-200
                  text-lg mt-5">

            Your destination.
            Your traditions.
            Your unforgettable celebration.

        </p>


        <a href="booking.php"
           class="inline-block
                  mt-8
                  bg-yellow-400
                  text-black
                  px-8 py-4
                  rounded-full
                  font-bold
                  hover:bg-yellow-300">

            Start Planning →

        </a>

    </div>

</section>



<!-- ================= ABOUT ================= -->

<section id="about"
         class="py-16
                bg-[#fff8ed]">


    <div class="max-w-4xl
                mx-auto
                px-6
                text-center">

        <h2 class="text-3xl
                   font-bold
                   text-[#681b40]">

            About VIVAHVISTA

        </h2>


        <p class="text-gray-600
                  text-lg
                  mt-5">

            VIVAHVISTA brings together
            beautiful destinations,
            Indian traditions and
            unforgettable wedding experiences
            to create celebrations that
            feel truly yours.

        </p>

    </div>

</section>



<!-- ================= FOOTER ================= -->

<footer class="bg-[#250817]
               text-white
               py-10">


    <div class="max-w-7xl
                mx-auto
                px-6">


        <div class="grid md:grid-cols-3
                    gap-8">


            <div>

                <h2 class="text-2xl
                           font-bold
                           text-yellow-300">

                    VIVAHVISTA

                </h2>

                <p class="text-gray-400 mt-2">

                    Where Destinations
                    Meet Forever

                </p>

            </div>


            <div>

                <h3 class="font-bold">
                    Quick Links
                </h3>

                <div class="flex flex-col
                            gap-2 mt-3
                            text-gray-400">

                    <a href="#destinations">
                        Destinations
                    </a>

                    <a href="#moments">
                        Wedding Moments
                    </a>

                    <a href="#packages">
                        Packages
                    </a>

                    <a href="contact.php">
                        Contact
                    </a>

                </div>

            </div>


            <div>

                <h3 class="font-bold">
                    Plan Your Wedding
                </h3>

                <p class="text-gray-400 mt-3">

                    Let's create your
                    dream celebration.

                </p>

                <a href="booking.php"
                   class="inline-block
                          mt-4
                          bg-yellow-400
                          text-black
                          px-5 py-2
                          rounded-full">

                    Contact Us

                </a>

            </div>

        </div>


        <div class="border-t
                    border-white/10
                    mt-8 pt-6
                    text-center">

            <p class="text-gray-500 text-sm">

                Made by Rytham ❤️

            </p>

        </div>

    </div>

</footer>



<!-- ================= SLIDER JAVASCRIPT ================= -->

<script>


const slides = [

    // Indian couple wedding
    "https://images.unsplash.com/photo-1606800052052-a08af7148866?auto=format&fit=crop&w=2200&q=90",

    // Indian wedding couple
    "https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=2200&q=90",

    // Indian wedding moment
    "https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=2200&q=90",

    // Wedding ceremony
    "https://images.unsplash.com/photo-1465495976277-4387d4b0e4a6?auto=format&fit=crop&w=2200&q=90",

    // Destination wedding
    "https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=2200&q=90"

];


let currentSlide = 0;


function changeSlide(index) {

    currentSlide = index;

    const image =
        document.getElementById("heroImage");

    image.style.opacity = "0";


    setTimeout(() => {

        image.src =
            slides[currentSlide];

        image.style.opacity = "1";

    }, 300);


    updateDots();

}


function nextSlide() {

    currentSlide++;

    if (currentSlide >= slides.length) {

        currentSlide = 0;

    }

    changeSlide(currentSlide);

}


function previousSlide() {

    currentSlide--;

    if (currentSlide < 0) {

        currentSlide =
            slides.length - 1;

    }

    changeSlide(currentSlide);

}


function updateDots() {

    const dots =
        document.querySelectorAll(".dot");


    dots.forEach((dot, index) => {

        if (index === currentSlide) {

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


// Automatic slider
setInterval(() => {

    nextSlide();

}, 5000);


</script>


</body>
</html>
