<?php
// Ensure these paths match your actual folder structure in 'views/'
require_once base_path('views/partials/head.php');
require_once base_path('views/partials/nav.php');
?>

<!-- ONE PAGE STRUCTURE -->

<section id="home">
  <?php require base_path('views/index.view.php'); ?>
</section>

<section id="about">
  <?php require base_path('views/about.view.php'); ?>
</section>

<section id="program-services">
  <?php require base_path('views/program_services/index.view.php'); ?>
</section>

<section id="strategic-plans">
  <?php require base_path('views/strategic-plans/index.view.php'); ?>
</section>

<section id="testimonials">
  <?php require base_path('views/testimonials/index.view.php'); ?>
</section>

<section id="news-updates">
  <?php require base_path('views/news_updates/index.view.php'); ?>
</section>

<section id="gallery">
  <?php require base_path('views/gallery/index.view.php'); ?>
</section>

<section id="contact">
  <?php require base_path('views/contact.view.php'); ?>
</section>

<?php
require_once base_path('views/partials/footer.php');
?>