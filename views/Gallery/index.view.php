<div id="gallery">
  <div class="relative">
    <img src="../public/assets/gallery.jpg" alt="" class="w-full h-auto md:h-[16rem]">

    <div class="absolute inset-0 flex flex-col items-center justify-center px-2 text-center mb-2 md:h-[15rem]">
      <h1 class="text-white text-3xl md:text-4xl font-bold drop-shadow-lg mb-4">
        Gallery
      </h1>
      <p class="text-white text-lg md:text-lg max-w-5xl drop-shadow-md mb-5">
        Our photo and video gallery showcase the vibrant life of our cooperative. Browse through pictures from past National Inventors Weeks, Inventors Demo Days, training workshops, and product launch events. You'll see smiling inventors, hands-on demonstrations in our labs, and highlights of the innovations developed by our members.
      </p>
    </div>


    <div class="max-w-auto mx-auto flex items-center justify-between gap-4 md:mx-20">
      <form class="mt-6">
        <label for="search" class="sr-only">Search</label>
        <div class="flex items-center rounded-full overflow-hidden shadow-md border border-gray-300">
          <input
            type="search"
            id="search"
            class="w-80 px-5 py-2 text-sm text-heading placeholder:text-gray-400 
                focus:outline-none focus:ring-2 focus:ring-blue-400 border-none"
            placeholder="Search ..."
            required />
          <button
            type="button"
            class="flex items-center gap-2 px-4 py-2 bg-[#033E94] hover:bg-blue-600 
                text-white font-medium rounded-full focus:ring-2 focus:ring-blue-400 
                transition-colors duration-200">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-width="2"
                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
            </svg>
            Search
          </button>
        </div>
      </form>

      <div class="flex items-center mt-6 gap-3">
        <div class="flex items-center gap-1 bg-gray-100 rounded-full p-1 shadow-md">
          <button class="p-2 rounded-full hover:bg-blue-100 focus:bg-blue-200 transition-colors duration-200">
            <svg class="w-5 h-5 text-gray-600 hover:text-blue-600 transition-colors duration-200"
              xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
          <button class="p-2 rounded-full hover:bg-blue-100 focus:bg-blue-200 transition-colors duration-200">
            <svg class="w-5 h-5 text-gray-600 hover:text-blue-600 transition-colors duration-200"
              xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-width="2"
                d="M4 4h6v6H4V4zm10 0h6v6h-6V4zM4 14h6v6H4v-6zm10 0h6v6h-6v-6z" />
            </svg>
          </button>
        </div>

        <div class="w-40">
          <label for="sort" class="sr-only">Sort By:</label>
          <select
            id="sort"
            class="block w-full rounded-full border border-gray-300 bg-white px-4 py-2 
                text-sm text-gray-700 shadow-md focus:outline-none focus:ring-2 
                focus:ring-blue-400">
            <option value="date">Sort by Date</option>
            <option value="name">Sort by Name</option>
            <option value="recent">Most Recent</option>
            <option value="popular">Most Popular</option>
          </select>
        </div>
      </div>
    </div>

    <h1 class="text-5xl font-bold mx-[8%] my-10 text-[#033E94]">Video</h1>

    <div class="relative max-w-7xl 2xl:max-w-full mx-auto">

      <div class="px-8 md:px-20">
        <div id="video-owl-carousel" class="owl-carousel owl-theme">
  
          <div class="p-4 h-full">
            <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-full p-6 h-full">
              <a href="#" class="relative block">
                <img class="rounded-xl shadow-lg w-full" src="../public/assets/v1.jpg" alt="Green Tech Initiative" />
                <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="../public/assets/video.png" alt="Play Icon" style="width: 5rem; height: 5rem;" />
              </a>
              <h5 class="mt-6 mb-2 text-xl md:text-2xl xl:text-xl tracking-tight text-heading flex justify-between items-center">
                <strong>Green Tech Initiative:</strong>
                <span class="">Jan 2025</span>
              </h5>
              <p class="mb-6 text-body xl:text-lg md:text-xl">
                Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
              </p>
            </div>
          </div>

          <div class="p-4 h-full">
            <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-full p-6 h-full">
              <a href="#" class="relative block">
                <img class="rounded-xl shadow-lg w-full" src="../public/assets/v1.jpg" alt="Green Tech Initiative" />
                <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="../public/assets/video.png" alt="Play Icon" style="width: 5rem; height: 5rem;" />
              </a>
              <h5 class="mt-6 mb-2 text-xl md:text-2xl xl:text-xl tracking-tight text-heading flex justify-between items-center">
                <strong>Green Tech Initiative:</strong>
                <span class="">Jan 2025</span>
              </h5>
              <p class="mb-6 text-body xl:text-lg md:text-xl">
                Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
              </p>
            </div>
          </div>

          <div class="p-4 h-full">
            <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-full p-6 h-full">
              <a href="#" class="relative block">
                <img class="rounded-xl shadow-lg w-full" src="../public/assets/v1.jpg" alt="Green Tech Initiative" />
                <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="../public/assets/video.png" alt="Play Icon" style="width: 5rem; height: 5rem;" />
              </a>
              <h5 class="mt-6 mb-2 text-xl md:text-2xl xl:text-xl tracking-tight text-heading flex justify-between items-center">
                <strong>Green Tech Initiative:</strong>
                <span class="">Jan 2025</span>
              </h5>
              <p class="mb-6 text-body xl:text-lg md:text-xl">
                Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
              </p>
            </div>
          </div>

          <div class="p-4 h-full">
            <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-full p-6 h-full">
              <a href="#" class="relative block">
                <img class="rounded-xl shadow-lg w-full" src="../public/assets/v1.jpg" alt="Green Tech Initiative" />
                <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="../public/assets/video.png" alt="Play Icon" style="width: 5rem; height: 5rem;" />
              </a>
              <h5 class="mt-6 mb-2 text-xl md:text-2xl xl:text-xl tracking-tight text-heading flex justify-between items-center">
                <strong>Green Tech Initiative:</strong>
                <span class="">Jan 2025</span>
              </h5>
              <p class="mb-6 text-body xl:text-lg md:text-xl">
                Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class="absolute inset-y-0 left-0 flex items-center px-8 md:px-0 md:pr-15 z-20 pointer-events-none">
        <button id="galleryPrevBtn" class="bg-white rounded-full shadow-md hover:bg-gray-200 pointer-events-auto cursor-pointer">
          <img src="../public/assets/leftarrow.png" alt="Previous" class="w-20 h-20 hover:bg-blue-600 rounded-full p-1" />
        </button>
      </div>

      <div class="absolute inset-y-0 right-0 flex items-center px-8 md:px-0 md:pl-15 z-20 pointer-events-none ">
        <button id="galleryNextBtn" class="bg-white rounded-full shadow-md hover:bg-gray-200 pointer-events-auto cursor-pointer">
          <img src="../public/assets/rightarrow.png" alt="Next" class="w-20 h-20 bg-none hover:bg-blue-600 rounded-full p-1" />
        </button>
      </div>
    </div>

    <div class="flex justify-center mt-6">
      <button type="submit"
        class="text-white bg-[#033E94] hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 
        shadow-md rounded-xl text-2xl px-8 py-3 cursor-pointer">
        View all
      </button>
    </div>


    <h1 class="text-5xl font-bold mx-[8%] my-10 text-[#033E94]">Photo</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-10 xl:px-[15%] shadow-lg transition duration-500 ease-in-out 
           transform">
      <div class="relative w-full h-full">
        <img src="../public/assets/pp1.jpg" alt="Large Image"
          class="w-full h-full object-cover p-4 shadow-xl">

        <div class="absolute top-10 lg:top-15 bg-gradient-to-tr 
       from-yellow-500 via-yellow-300 to-yellow-600
       text-white px-6 py-2 rounded-br-full text-2xl lg:text-4xl lg:px-13 font-bold">
          HIGHLIGHTS
        </div>
      </div>

      <div class="grid grid-cols-2 grid-rows-2 gap-4">
        <img src="../public/assets/pp1.jpg" alt="Image 1" class="w-full h-full object-cover p-4 shadow-xl">
        <img src="../public/assets/pp1.jpg" alt="Image 2" class="w-full h-full object-cover p-4 shadow-xl">
        <img src="../public/assets/pp1.jpg" alt="Image 3" class="w-full h-full object-cover p-4 shadow-xl">
        <img src="../public/assets/pp1.jpg" alt="Image 4" class="w-full h-full object-cover p-4 shadow-xl">
      </div>

      <div class="col-span-1 lg:col-span-2 flex justify-center mt-6">
        <button type="submit"
          class="text-white bg-[#033E94] hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 
             shadow-md font-semibold rounded-xl text-xl px-8 py-3 cursor-pointer">
          View all
        </button>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    var owl = $('#video-owl-carousel');

    owl.owlCarousel({
      loop: true,
      margin: 40,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        640: {
          items: 1
        },
        1024: {
          items: 2
        },
        1280: {
          items: 3
        }
      }
    });

    // Custom Button Logic to control Owl Carousel
    $('#galleryNextBtn').click(function() {
      owl.trigger('next.owl.carousel');
    });

    $('#galleryPrevBtn').click(function() {
      owl.trigger('prev.owl.carousel');
    });
  });
</script>