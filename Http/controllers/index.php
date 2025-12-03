<?php

// This controller now loads the 'Master Layout' which contains
// all the sections (Home, About, Services, etc.)
// assuming layout.php is directly in the views folder:
require base_path('views/layout.php'); 

// If layout.php is in the root (not recommended, but based on your file list):
// require base_path('layout.php');