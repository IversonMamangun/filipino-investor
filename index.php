<?php
include_once("App/views/partials/head.php");
include_once("App/views/partials/nav.php");
include_once("App/views/home.php");
?>
<!-- Big centered About Us -->
<h1 class="text-5xl font-bold text-center my-10 text-[#033E94]">ABOUT US</h1>

<div class="grid grid-cols-2 gap-8 h-screen px-10">
  <!-- Column 1: two rows -->
  <div class="grid grid-rows-2 gap-8">
    <!-- First block -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-center text-center">

      <p class="text-lg text-start leading-relaxed text-[#033E94]">
        FISMPC began in 2011 under the guiding spirit of the Filipino Investors Society (FIS), 
        the country's pioneer organization for inventors and creative technologists. 
        We were conceived as the socio-economic arm of FIS to empower Filipino innovators 
        by supporting invention-based enterprises and sustainable livelihoods. 
        Over the years, our cooperative has nurtured countless inventors, 
        helping them take ideas from the lab or workshop to the marketplace.
      </p>
    </div>

    <!-- Second block -->
    <!-- <div class="shadow-lg rounded-lg p-6 text-center bg-[#785402]">
      <h2 class="text-3xl bg-[#DE9F1B] font-bold text-white mb-4">OUR VISION</h2>
      <p class="text-xl text-start leading-relaxed text-white">
        To build a globally recognized innovation cooperative that transforms Filipino inventors 
        into sustainable industries, uplifts communities, and strengthens the nation's self-reliance 
        through science, creativity, and cooperative unity.
      </p>
    </div>
  </div> -->
  <!-- Second block -->
<div class="shadow-lg rounded-lg bg-[#785402]">
  
  <!-- Row for image + heading -->
  <div class="flex items-center w-full 
              bg-gradient-to-r from-[#DE9F1B] via-[#DE9F1B]/80 to-transparent 
              mb-4 mt-6">
    
    <!-- Image on the left -->
     <div class="flex items-center justify-center w-18 h-18 rounded-full bg-white ml-4 mr-4">
    <img src="./public/assets/vision.png" alt="Vision Icon" 
         class="w-15 h-15 object-cover rounded-full ml-4 mr-4" />
    </div>
    <!-- Heading -->
    <h2 class="flex-1 text-3xl font-bold text-white py-4 px-4">
      OUR VISION
    </h2>
  </div>

  <!-- Separate row for text content -->
  <div class="w-full p-6">
    <p class="text-xl text-start leading-relaxed text-white">
      To build a globally recognized innovation cooperative that transforms Filipino inventors 
      into sustainable industries, uplifts communities, and strengthens the nation's self-reliance 
      through science, creativity, and cooperative unity.
    </p>
  </div>
</div>


  <!-- Column 2: full height -->
  <div class="bg-gray-100 shadow-xl rounded-lg flex items-center justify-center">
    <h1 class="text-4xl font-bold text-gray-800">Main Content Here</h1>
  </div>
</div>


