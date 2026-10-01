<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>VIVAHVISTA | Destination Weddings</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>

html {
    scroll-behavior: smooth;
}

.hero-img {
    transition: opacity 0.6s ease-in-out,
                transform 6s ease;
}

.glass {
    background: rgba(40, 10, 28, 0.72);
    backdrop-filter: blur(12px);
}

.destination-card,
.moment-card,
.package-card {
    transition: 0.4s;
}

.destination-card:hover,
.moment-card:hover,
.package-card:hover {
    transform: translateY(-8px);
}

</style>

</head>


<body class="bg-[#fff8ed] text-gray-800">


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="fixed top-0 left-0 w-full z-50 glass text-white">

<div class="max-w-7xl mx-auto px-6 py-4
            flex items-center justify-between">


<div>

<h1 class="text-2xl md:text-3xl
           font-bold tracking-widest
           text-yellow-300">

VIVAHVISTA

</h1>

<p class="text-[10px] md:text-xs
          tracking-[4px]">

WHERE DESTINATIONS MEET FOREVER

</p>

</div>


<div class="hidden lg:flex
            items-center gap-7
            font-medium">

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

<a href="#packages"
   class="hover:text-yellow-300">

Packages

</a>

<a href="#about"
   class="hover:text-yellow-300">

About

</a>

<a href="contact.php"
   class="hover:text-yellow-300">

Contact

</a>

<a href="booking.php"
   class="bg-yellow-400
          text-black
          px-5 py-2
          rounded-full
          font-bold
          hover:bg-yellow-300">

Plan Your Wedding

</a>

</div>

</div>

</nav>



<!-- =====================================================
     HERO
===================================================== -->

<section class="relative
                h-screen
                min-h-[680px]
                overflow-hidden">


<img id="heroImage"

     src="https://images.pexels.com/photos/36098389/pexels-photo-36098389.jpeg?auto=compress&cs=tinysrgb&w=2000"

     class="hero-img
            absolute inset-0
            w-full h-full
            object-cover"

     alt="Indian Bride and Groom">


<!-- DARK OVERLAY -->

<div class="absolute inset-0
            bg-gradient-to-r
            from-black/80
            via-black/50
            to-black/20">
</div>


<!-- HERO CONTENT -->

<div class="relative z-10
            h-full
            flex items-center">

<div class="max-w-7xl
            mx-auto
            px-6
            w-full">

<div class="max-w-3xl
            text-white">


<p class="text-yellow-300
          font-semibold
          tracking-[4px]
          mb-5">

INDIAN DESTINATION WEDDINGS

</p>


<h2 class="text-5xl
           md:text-7xl
           font-serif
           font-bold
           leading-tight">

Your Dream Wedding

<br>

<span class="text-yellow-300">

in Beautiful Destinations

</span>

</h2>


<p class="text-lg
          md:text-xl
          text-gray-200
          mt-7
          max-w-2xl">

Celebrate Indian traditions,
beautiful venues and unforgettable
moments at destinations made
for your special day.

</p>


<div class="flex flex-wrap
            gap-4 mt-9">


<a href="#destinations"
   class="bg-yellow-400
          text-black
          px-7 py-3
          rounded-full
          font-bold
          hover:bg-yellow-300">

Explore Destinations →

</a>


<a href="booking.php"
   class="border border-white
          px-7 py-3
          rounded-full
          hover:bg-white
          hover:text-black">

Plan Your Wedding

</a>


</div>

</div>

</div>

</div>



<!-- PREVIOUS -->

<button onclick="previousSlide()"

        class="absolute
               left-5
               top-1/2
               -translate-y-1/2
               z-20
               w-12 h-12
               rounded-full
               bg-black/50
               text-white
               text-3xl
               hover:bg-black/80">

‹

</button>


<!-- NEXT -->

<button onclick="nextSlide()"

        class="absolute
               right-5
               top-1/2
               -translate-y-1/2
               z-20
               w-12 h-12
               rounded-full
               bg-black/50
               text-white
               text-3xl
               hover:bg-black/80">

›

</button>


<!-- DOTS -->

<div class="absolute
            bottom-8
            left-1/2
            -translate-x-1/2
            z-20
            flex gap-3">

<span class="dot w-3 h-3
             rounded-full
             bg-white
             cursor-pointer"
      onclick="changeSlide(0)">
</span>

<span class="dot w-3 h-3
             rounded-full
             bg-white/50
             cursor-pointer"
      onclick="changeSlide(1)">
</span>

<span class="dot w-3 h-3
             rounded-full
             bg-white/50
             cursor-pointer"
      onclick="changeSlide(2)">
</span>

<span class="dot w-3 h-3
             rounded-full
             bg-white/50
             cursor-pointer"
      onclick="changeSlide(3)">
</span>

</div>

</section>



<!-- =====================================================
     DESTINATIONS
===================================================== -->

<section id="destinations"
         class="py-20
                bg-[#fff8ed]">

<div class="max-w-7xl
            mx-auto px-6">


<div class="text-center">

<p class="text-[#a33a5e]
          font-semibold
          tracking-[4px]">

DISCOVER BEAUTIFUL PLACES

</p>


<h2 class="text-4xl
           md:text-5xl
           font-bold
           text-[#681b40]
           mt-3">

Wedding Destinations

</h2>


<p class="text-gray-600
          mt-4
          max-w-2xl
          mx-auto">

From royal palaces to beach resorts,
find a destination that makes
your celebration unforgettable.

</p>

</div>



<div class="grid
            md:grid-cols-2
            lg:grid-cols-4
            gap-6
            mt-12">


<!-- ROYAL -->

<div class="destination-card
            relative
            h-96
            rounded-3xl
            overflow-hidden
            shadow-xl">

<img src="https://images.pexels.com/photos/33318112/pexels-photo-33318112.jpeg?auto=compress&cs=tinysrgb&w=1200"

     class="w-full h-full
            object-cover"

     alt="Royal Indian Wedding">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/85
            via-black/20
            to-transparent">
</div>


<div class="absolute
            bottom-6
            left-6
            text-white">

<p class="text-yellow-300
          text-sm
          tracking-widest">

ROYAL

</p>

<h3 class="text-2xl
           font-bold">

Royal Palace

</h3>

<p class="text-gray-200">

Grand Indian celebrations

</p>

</div>

</div>



<!-- BEACH -->

<div class="destination-card
            relative
            h-96
            rounded-3xl
            overflow-hidden
            shadow-xl">

<img src="https://images.pexels.com/photos/36098374/pexels-photo-36098374.jpeg?auto=compress&cs=tinysrgb&w=1200"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding Couple">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/85
            via-black/20
            to-transparent">
</div>


<div class="absolute
            bottom-6
            left-6
            text-white">

<p class="text-yellow-300
          text-sm
          tracking-widest">

BEACH

</p>

<h3 class="text-2xl
           font-bold">

Beach Wedding

</h3>

<p class="text-gray-200">

Celebrate by the sea

</p>

</div>

</div>



<!-- GARDEN -->

<div class="destination-card
            relative
            h-96
            rounded-3xl
            overflow-hidden
            shadow-xl">

<img src="https://images.pexels.com/photos/36523472/pexels-photo-36523472.jpeg?auto=compress&cs=tinysrgb&w=1200"

     class="w-full h-full
            object-cover"

     alt="Indian Bride Groom">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/85
            via-black/20
            to-transparent">
</div>


<div class="absolute
            bottom-6
            left-6
            text-white">

<p class="text-yellow-300
          text-sm
          tracking-widest">

GARDEN

</p>

<h3 class="text-2xl
           font-bold">

Garden Wedding

</h3>

<p class="text-gray-200">

Nature meets tradition

</p>

</div>

</div>



<!-- LUXURY -->

<div class="destination-card
            relative
            h-96
            rounded-3xl
            overflow-hidden
            shadow-xl">

<img src="https://images.pexels.com/photos/31558008/pexels-photo-31558008.jpeg?auto=compress&cs=tinysrgb&w=1200"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding Couple">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/85
            via-black/20
            to-transparent">
</div>


<div class="absolute
            bottom-6
            left-6
            text-white">

<p class="text-yellow-300
          text-sm
          tracking-widest">

LUXURY

</p>

<h3 class="text-2xl
           font-bold">

Luxury Resorts

</h3>

<p class="text-gray-200">

Celebrate in style

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
                bg-[#fff0f0]">

<div class="max-w-7xl
            mx-auto px-6">


<div class="text-center">

<p class="text-[#a33a5e]
          font-semibold
          tracking-[4px]">

INDIAN WEDDING

</p>


<h2 class="text-4xl
           md:text-5xl
           font-bold
           text-[#681b40]
           mt-3">

Beautiful Wedding Moments

</h2>


<p class="text-gray-600 mt-4">

Every ritual has its own story.

</p>

</div>



<div class="grid
            grid-cols-2
            md:grid-cols-3
            lg:grid-cols-4
            gap-5
            mt-12">


<!-- HALDI -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/32121489/pexels-photo-32121489.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

🌼 Haldi

</h3>

</div>



<!-- MEHENDI -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/27635271/pexels-photo-27635271.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding Couple">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

🌿 Mehendi

</h3>

</div>



<!-- BARAAT -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/19780151/pexels-photo-19780151.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

🥁 Baraat

</h3>

</div>



<!-- BRIDAL ENTRY -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/12200848/pexels-photo-12200848.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Bride Groom">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

👰 Bridal Entry

</h3>

</div>



<!-- JAIMALA -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/30482896/pexels-photo-30482896.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding Couple">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

💐 Jaimala

</h3>

</div>



<!-- CEREMONY -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/20513773/pexels-photo-20513773.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding Ceremony">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

🔥 Wedding Ceremony

</h3>

</div>



<!-- MAHARASHTRIAN -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/36098389/pexels-photo-36098389.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Traditional Wedding">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

🪔 Maharashtrian Wedding

</h3>

</div>



<!-- RECEPTION -->

<div class="moment-card
            relative
            h-72
            rounded-2xl
            overflow-hidden">

<img src="https://images.pexels.com/photos/33318112/pexels-photo-33318112.jpeg?auto=compress&cs=tinysrgb&w=1000"

     class="w-full h-full
            object-cover"

     alt="Indian Wedding Reception">


<div class="absolute inset-0
            bg-gradient-to-t
            from-black/80
            to-transparent">
</div>


<h3 class="absolute
           bottom-5
           left-5
           text-white
           text-xl
           font-bold">

🎉 Reception

</h3>

</div>


</div>

</div>

</section>



<!-- =====================================================
     WHY VIVAHVISTA
===================================================== -->

<section class="py-20
                bg-[#4b102c]
                text-white">

<div class="max-w-7xl
            mx-auto px-6">


<div class="text-center">

<p class="text-yellow-300
          tracking-[4px]">

WHY VIVAHVISTA

</p>

<h2 class="text-4xl
           md:text-5xl
           font-bold
           mt-3">

Everything For Your Perfect Celebration

</h2>

</div>



<div class="grid
            md:grid-cols-4
            gap-8
            mt-14">


<div class="text-center">

<div class="text-5xl">
❤️
</div>

<h3 class="text-xl
           font-bold
           mt-5">

Trusted Planning

</h3>

<p class="text-gray-300
          mt-3">

Thoughtful planning
for your special day.

</p>

</div>



<div class="text-center">

<div class="text-5xl">
🏰
</div>

<h3 class="text-xl
           font-bold
           mt-5">

Beautiful Venues

</h3>

<p class="text-gray-300
          mt-3">

Royal palaces,
beaches and resorts.

</p>

</div>



<div class="text-center">

<div class="text-5xl">
✨
</div>

<h3 class="text-xl
           font-bold
           mt-5">

Indian Traditions

</h3>

<p class="text-gray-300
          mt-3">

Celebrate every
beautiful ritual.

</p>

</div>



<div class="text-center">

<div class="text-5xl">
📍
</div>

<h3 class="text-xl
           font-bold
           mt-5">

Destination Experts

</h3>

<p class="text-gray-300
          mt-3">

Find your perfect
wedding destination.

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
                bg-[#fff8ed]">

<div class="max-w-6xl
            mx-auto px-6">


<div class="text-center">

<p class="text-[#a33a5e]
          tracking-[4px]
          font-semibold">

WEDDING EXPERIENCES

</p>

<h2 class="text-4xl
           md:text-5xl
           font-bold
           text-[#681b40]
           mt-3">

Choose Your Celebration

</h2>

</div>



<div class="grid
            md:grid-cols-3
            gap-8
            mt-14">


<!-- CLASSIC -->

<div class="package-card
            bg-white
            rounded-3xl
            p-8
            shadow-xl
            text-center">

<div class="text-5xl">
🌸
</div>

<h3 class="text-2xl
           font-bold
           text-[#681b40]
           mt-5">

Classic

</h3>

<p class="text-gray-600 mt-4">

Elegant and intimate
destination celebrations.

</p>

<a href="booking.php"
   class="inline-block
          mt-7
          border-2
          border-[#681b40]
          text-[#681b40]
          px-6 py-3
          rounded-full
          font-semibold">

Enquire Now

</a>

</div>



<!-- ROYAL -->

<div class="package-card
            bg-[#681b40]
            text-white
            rounded-3xl
            p-8
            shadow-2xl
            text-center
            md:scale-105">

<div class="text-5xl">
👑
</div>

<h3 class="text-2xl
           font-bold
           mt-5">

Royal

</h3>

<p class="text-gray-200 mt-4">

A grand Indian
destination wedding.

</p>

<a href="booking.php"
   class="inline-block
          mt-7
          bg-yellow-400
          text-black
          px-6 py-3
          rounded-full
          font-bold">

Plan Now

</a>

</div>



<!-- LUXURY -->

<div class="package-card
            bg-white
            rounded-3xl
            p-8
            shadow-xl
            text-center">

<div class="text-5xl">
💎
</div>

<h3 class="text-2xl
           font-bold
           text-[#681b40]
           mt-5">

Luxury

</h3>

<p class="text-gray-600 mt-4">

A premium experience
designed around you.

</p>

<a href="booking.php"
   class="inline-block
          mt-7
          border-2
          border-[#681b40]
          text-[#681b40]
          px-6 py-3
          rounded-full
          font-semibold">

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
                bg-[#fff0f0]">

<div class="max-w-4xl
            mx-auto
            px-6
            text-center">


<p class="text-[#a33a5e]
          tracking-[4px]
          font-semibold">

ABOUT VIVAHVISTA

</p>


<h2 class="text-4xl
           md:text-5xl
           font-bold
           text-[#681b40]
           mt-3">

Where Destinations Meet Forever

</h2>


<p class="text-gray-600
          text-lg
          leading-relaxed
          mt-7">

VIVAHVISTA is created for couples
who want to celebrate their wedding
with beautiful destinations,
Indian traditions and unforgettable
memories.

</p>


<p class="text-gray-600
          text-lg
          leading-relaxed
          mt-4">

From intimate ceremonies to grand
destination celebrations, we help
turn your wedding vision into
a beautiful experience.

</p>


</div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="py-20
                bg-[#7b1e1e]
                text-white
                text-center">

<div class="max-w-4xl
            mx-auto
            px-6">


<h2 class="text-4xl
           md:text-6xl
           font-bold">

Let's Plan Your
Perfect Day ❤️

</h2>


<p class="text-gray-200
          text-lg
          mt-6">

Your destination.
Your traditions.
Your beautiful story.

</p>


<a href="booking.php"
   class="inline-block
          mt-8
          bg-yellow-400
          text-black
          px-8 py-4
          rounded-full
          font-bold
          text-lg
          hover:bg-yellow-300">

Start Planning →

</a>


</div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="bg-[#250817]
               text-white
               py-12">

<div class="max-w-7xl
            mx-auto
            px-6">


<div class="grid
            md:grid-cols-3
            gap-10">


<div>

<h2 class="text-3xl
           font-bold
           text-yellow-300">

VIVAHVISTA

</h2>

<p class="text-gray-400
          mt-3">

Where Destinations
Meet Forever.

</p>

</div>



<div>

<h3 class="font-bold
           text-lg">

Quick Links

</h3>

<div class="flex
            flex-col
            gap-2
            mt-4
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

<h3 class="font-bold
           text-lg">

Plan Your Wedding

</h3>

<p class="text-gray-400
          mt-4">

Let's create your
dream celebration.

</p>

<a href="booking.php"
   class="inline-block
          mt-5
          bg-yellow-400
          text-black
          px-6 py-2
          rounded-full
          font-semibold">

Contact Us

</a>

</div>


</div>



<div class="border-t
            border-white/10
            mt-10
            pt-6
            text-center">

<p class="text-gray-500">

Made by Rytham ❤️

</p>

</div>


</div>

</footer>



<!-- =====================================================
     SLIDER JAVASCRIPT
===================================================== -->

<script>

const slides = [

"https://images.pexels.com/photos/36098389/pexels-photo-36098389.jpeg?auto=compress&cs=tinysrgb&w=2000",

"https://images.pexels.com/photos/36098374/pexels-photo-36098374.jpeg?auto=compress&cs=tinysrgb&w=2000",

"https://images.pexels.com/photos/36523472/pexels-photo-36523472.jpeg?auto=compress&cs=tinysrgb&w=2000",

"https://images.pexels.com/photos/33318112/pexels-photo-33318112.jpeg?auto=compress&cs=tinysrgb&w=2000"

];


let currentSlide = 0;


function changeSlide(index) {

    currentSlide = index;

    const image =
        document.getElementById("heroImage");

    image.style.opacity = "0";


    setTimeout(function() {

        image.src =
            slides[currentSlide];

        image.style.opacity = "1";

    }, 300);


    document
        .querySelectorAll(".dot")
        .forEach(function(dot, i) {

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


setInterval(function() {

    nextSlide();

}, 5000);

</script>


</body>

</html>
