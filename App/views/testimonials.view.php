<div class="relative">
    <img src="public/assets/gallery.jpg" alt="" class="w-full h-auto">

    <div class="absolute inset-0 flex flex-col items-center justify-end px-2 text-center mb-2">
        <h1 class="text-white text-3xl md:text-5xl font-bold drop-shadow-lg mb-20">
            Testimonials
        </h1>
    </div>

</div>

<div class="relative mt-5 px-10"
    style="background: linear-gradient(to bottom, white 0 35%, #033E94 35% 100%);">

    <!-- Carousel Track -->
<div id="carousel"
     class="flex overflow-hidden scroll-smooth gap-10 py-10 px-25 mr-4">

  <!-- Card 1 -->
  <a href="#" class="flex bg-white p-7 rounded-xl shadow-lg w-[500px] h-[300px]">
    
    <!-- Left Column (35%) -->
    <div class="flex flex-col justify-between items-center w-[35%] mr-6">
      <!-- Image at top -->
      <img class="object-cover w-24 h-24 rounded-full" 
           src="public/assets/marisol.png" alt="Marisol D.">

      <!-- Badge at bottom -->
<div class="flex items-center justify-center h-screen bg-white">
  <div class="space-y-4">
    <div class="w-32 h-8 bg-red-500 transform rotate-85"></div>
    <div class="w-32 h-8 bg-red-500 transform rotate-12"></div>
  </div>
</div>

    </div>

    <!-- Right Column (65%) -->
    <div class="flex flex-col w-[65%] leading-normal">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-heading">Marisol D.</h5>
      <i>Teacher and FISMPC Members</i>
      <p class="mt-6 text-body">
        Joining FISMPC was the turning point for my invention.
        The mentorship and funding I received helped me refine my solar irrigation prototype
        and bring it to rural farmers. Now it's making a real impact in our community!
      </p>
    </div>
  </a>

</div>

    <!-- Navigation Buttons -->
    <button onclick="scrollCarousel(-1)"
        class="absolute left-14 top-1/2 -translate-y-7/3 bg-white rounded-full shadow-lg">
        <img src="./public/assets/leftarrow.png" alt="Previous" class="w-15 h-15" />
    </button>

    <button onclick="scrollCarousel(1)"
        class="absolute right-0 top-1/2 -translate-y-7/3 bg-white rounded-full shadow-lg">
        <img src="./public/assets/rightarrow.png" alt="Next" class="w-15 h-15" />
    </button>

</div>

<script>
    const carousel = document.getElementById('carousel');
    const cardWidth = carousel.querySelector('.bg-white').offsetWidth + 24; // card width + gap
    const visibleCards = 3;

    function scrollCarousel(direction) {
        carousel.scrollBy({
            left: direction * cardWidth * visibleCards,
            behavior: 'smooth'
        });
    }
</script>