<?php
// Common includes for main PHP pages (controllers)

// Define constants that points to the direcories within the project to help when including files

// ROOT_DIR will point ot the "northwind-website" folder
// TEMPLATES_DIR will point to the "norhtwind-website/templates/" folder
// INCLUDES_DIR will point to the "norhtwind-website/includes/" folder

// Examples
// include_once ROOT_DIR . "services.php";
// include_once TEMPLATES_DIR . "_servicesPage.html.php";
// include_once INCLUDES_DIR . "formHelpers.php";

define("ROOT_DIR", __DIR__ . "/../");

define("INCLUDES_DIR", ROOT_DIR . "includes/");

define("TEMPLATES_DIR", ROOT_DIR . "templates/");





?>