<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Find Your Soulmate | Maharashtrian Wedding</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        royal: '#5B1647',
                        gold: '#D4AF37',
                        cream: '#FFF8E7',
                        maroon: '#7B1E1E',
                        green: '#285943'
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Georgia, 'Times New Roman', serif;
        }

        .hero-slide {
            animation: zoom 8s ease-in-out infinite alternate;
        }

        @keyframes zoom {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.08);
            }
        }

        .gold-text {
            background: linear-gradient(
                90deg,
                #D4AF37,
                #FFE8A3,
                #D4AF37
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .flower {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body class="bg-cream text-gray-800">

<!-- ================= NAVBAR ================= -->

<nav class="fixed top-0 left-0 w-full z-50 bg-black/40 backdrop-blur-md border-b border-white/20">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <div class="text-2xl font-bold text-white">
            💍 <span class="text-yellow-300">Soulmate</span>
        </div>

        <div class="hidden md:flex gap-8 text-white font-semibold">

            <a href="#home" class="hover:text-yellow-300 transition">
                Home
            </a>

            <a href="#story" class="hover:text-yellow-300 transition">
                Our Story
            </a>

            <a href="#wedding" class="hover:text-yellow-300 transition">
                Wedding
            </a>

            <a href="#gallery" class="hover:text-yellow-300 transition">
                Gallery
            </a>

            <a href="#rsvp" class="hover:text-yellow-300 transition">
                RSVP
            </a>

        </div>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section id="home"
    class="relative h-screen overflow-hidden flex items-center justify-center text-center text-white">

    <!-- Couple Image -->

    <div
        class="absolute inset-0 hero-slide bg-cover bg-center"
        style="
        background-image:
        url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=2000&q=90');
        ">
    </div>

    <!-- Dark Overlay -->

    <div class="absolute inset-0 bg-black/55"></div>

    <!-- Decorative flowers -->

    <div class="absolute top-32 left-10 text-5xl flower">
        🌺
    </div>

    <div class="absolute bottom-32 right-10 text-5xl flower">
        🌸
    </div>


    <!-- Hero Content -->

    <div class="relative z-10 px-6 max-w-4xl">

        <p class="text-yellow-300 text-xl md:text-2xl mb-5 tracking-widest">
            शुभ विवाह
        </p>

        <h1 class="text-5xl md:text-8xl font-bold mb-6 gold-text">
            Find Your Soulmate
        </h1>

        <div class="text-4xl md:text-6xl font-semibold mb-6">
            ❤️
            <span class="text-white">Aarav</span>
            <span class="text-yellow-300">&</span>
            <span class="text-white">Aditi</span>
            ❤️
        </div>

        <p class="text-xl md:text-2xl italic mb-8">
            “दोन जीव, एक सुंदर प्रवास...”
        </p>

        <p class="text-lg mb-8">
            Together with our families, we invite you
            to celebrate the beginning of our forever.
        </p>

        <a href="#wedding"
           class="inline-block bg-yellow-500 hover:bg-yellow-400
                  text-black font-bold px-8 py-4 rounded-full
                  shadow-xl transition transform hover:scale-105">

            💍 Join Our Celebration

        </a>

    </div>

</section>


<!-- ================= INTRO ================= -->

<section class="py-20 bg-cream text-center">

    <div class="max-w-4xl mx-auto px-6">

        <p class="text-royal text-xl mb-4">
            ॥ श्री गणेशाय नमः ॥
        </p>

        <h2 class="text-4xl md:text-5xl font-bold text-royal mb-6">
            A New Beginning
        </h2>

        <div class="text-5xl mb-6">
            🪷
        </div>

        <p class="text-lg leading-8 text-gray-700">
            Two hearts, two families and one beautiful journey.
            With the blessings of our loved ones,
            we are beginning a new chapter filled with
            love, laughter and happiness.
        </p>

    </div>

</section>


<!-- ================= OUR STORY ================= -->

<section id="story" class="py-20 bg-white">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">

            <p class="text-gold text-xl">
                OUR JOURNEY
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-royal">
                Our Story ❤️
            </h2>

        </div>


        <div class="grid md:grid-cols-2 gap-12 items-center">

            <img
                src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=1200&q=85"
                class="rounded-3xl shadow-2xl w-full h-[450px] object-cover"
                alt="Wedding couple"
            >


            <div>

                <h3 class="text-3xl font-bold text-maroon mb-6">
                    From a beautiful meeting to forever...
                </h3>

                <p class="text-gray-700 leading-8 mb-5">
                    Every love story has a beginning.
                    Ours started with a simple meeting,
                    followed by countless memories,
                    laughter and moments that brought us closer.
                </p>

                <p class="text-gray-700 leading-8">
                    Today, surrounded by our families and friends,
                    we are ready to begin the most beautiful chapter
                    of our lives.
                </p>

                <div class="mt-8 text-3xl">
                    🌸 💍 🌸
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= WEDDING DETAILS ================= -->

<section id="wedding" class="py-20 bg-royal text-white">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">

            <p class="text-yellow-300 text-xl">
                SAVE THE DATE
            </p>

            <h2 class="text-4xl md:text-5xl font-bold">
                Our Wedding
            </h2>

        </div>


        <div class="grid md:grid-cols-3 gap-8">

            <!-- Date -->

            <div class="bg-white/10 backdrop-blur-lg
                        border border-yellow-300/30
                        rounded-3xl p-10 text-center
                        hover:scale-105 transition">

                <div class="text-5xl mb-5">
                    📅
                </div>

                <h3 class="text-2xl font-bold text-yellow-300 mb-3">
                    Wedding Date
                </h3>

                <p class="text-xl">
                    25 December 2026
                </p>

            </div>


            <!-- Venue -->

            <div class="bg-white/10 backdrop-blur-lg
                        border border-yellow-300/30
                        rounded-3xl p-10 text-center
                        hover:scale-105 transition">

                <div class="text-5xl mb-5">
                    📍
                </div>

                <h3 class="text-2xl font-bold text-yellow-300 mb-3">
                    Venue
                </h3>

                <p class="text-xl">
                    Pune, Maharashtra
                </p>

            </div>


            <!-- Time -->

            <div class="bg-white/10 backdrop-blur-lg
                        border border-yellow-300/30
                        rounded-3xl p-10 text-center
                        hover:scale-105 transition">

                <div class="text-5xl mb-5">
                    🕐
                </div>

                <h3 class="text-2xl font-bold text-yellow-300 mb-3">
                    Muhurat
                </h3>

                <p class="text-xl">
                    11:30 AM
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= MAHARASHTRIAN TRADITIONS ================= -->

<section class="py-20 bg-[#FFF4D6]">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <p class="text-green text-xl mb-3">
            महाराष्ट्राची संस्कृती
        </p>

        <h2 class="text-4xl md:text-5xl font-bold text-maroon mb-12">
            Our Maharashtrian Wedding
        </h2>


        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            <div class="bg-white rounded-2xl p-7 shadow-lg">
                <div class="text-5xl mb-4">🥻</div>
                <h3 class="font-bold text-xl text-royal">
                    Paithani
                </h3>
                <p class="text-gray-600 mt-2">
                    Traditional elegance
                </p>
            </div>


            <div class="bg-white rounded-2xl p-7 shadow-lg">
                <div class="text-5xl mb-4">👑</div>
                <h3 class="font-bold text-xl text-royal">
                    Pheta
                </h3>
                <p class="text-gray-600 mt-2">
                    Royal Maharashtrian style
                </p>
            </div>


            <div class="bg-white rounded-2xl p-7 shadow-lg">
                <div class="text-5xl mb-4">🌼</div>
                <h3 class="font-bold text-xl text-royal">
                    Haldi
                </h3>
                <p class="text-gray-600 mt-2">
                    Joy & celebration
                </p>
            </div>


            <div class="bg-white rounded-2xl p-7 shadow-lg">
                <div class="text-5xl mb-4">🪔</div>
                <h3 class="font-bold text-xl text-royal">
                    Mangalashtak
                </h3>
                <p class="text-gray-600 mt-2">
                    Sacred traditions
                </p>
            </div>

        </div>

    </div>

</section>


<!-- ================= GALLERY ================= -->

<section id="gallery" class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-gold text-xl">
                OUR MEMORIES
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-royal">
                Love In Frames ❤️
            </h2>

        </div>


        <div class="grid md:grid-cols-3 gap-6">

            <img
                src="https://images.unsplash.com/photo-1606800052052-a08af7148866?auto=format&fit=crop&w=1000&q=85"
                class="w-full h-96 object-cover rounded-2xl shadow-lg hover:scale-105 transition"
                alt="Wedding couple"
            >

            <img
                src="https://images.unsplash.com/photo-1465495976277-4387d4b0e4a6?auto=format&fit=crop&w=1000&q=85"
                class="w-full h-96 object-cover rounded-2xl shadow-lg hover:scale-105 transition"
                alt="Wedding celebration"
            >

            <img
                src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=1000&q=85"
                class="w-full h-96 object-cover rounded-2xl shadow-lg hover:scale-105 transition"
                alt="Wedding ceremony"
            >

        </div>

    </div>

</section>


<!-- ================= RSVP ================= -->

<section id="rsvp" class="py-20 bg-gradient-to-br from-royal to-maroon text-white">

    <div class="max-w-3xl mx-auto px-6 text-center">

        <div class="text-5xl mb-6">
            💌
        </div>

        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Be Part Of Our Story
        </h2>

        <p class="text-lg mb-8 text-white/80">
            Your presence will make our special day
            even more beautiful.
        </p>

        <button
            class="bg-yellow-400 hover:bg-yellow-300
                   text-black font-bold
                   px-10 py-4 rounded-full
                   shadow-xl transition hover:scale-105">

            💕 RSVP Now

        </button>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="bg-black text-white text-center py-8">

    <div class="text-3xl mb-3">
        💍 ❤️ 🌸
    </div>

    <h3 class="text-2xl font-bold text-yellow-300">
        Aarav & Aditi
    </h3>

    <p class="mt-3 text-gray-400">
        Find Your Soulmate • Maharashtra
    </p>

    <p class="mt-5 text-gray-500 text-sm">
        Made by rytham ❤️ for a beautiful beginning
    </p>

</footer>

</body>
</html>
