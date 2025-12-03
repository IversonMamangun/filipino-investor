<?php

// Since it is a single page app, everything is on the home route
$router->get('/', '/index.php');

// If you want to handle the specific sections via URL (optional),
// you can keep these, but for a true Single Page App, these
// usually just anchor link to the ID on the main page.
// However, if you want specific PHP logic for them, keep them:

// $router->get('/about', '/about.php');
// $router->get('/contact', '/contact.php');