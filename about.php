<?php
//Setup for the page

// Common includes for main PHP pages (controllers)
require_once "includes/common.php";

//Config
$title = "About our company";

// Start output buffering (trap the output instead of displaying it)
ob_start();

// Include the page-specific template/content
include_once "templates/_about.html.php";

// Stop output buffering (store output in $content variable)
$content = ob_get_clean();

//Test
//$content = 'howdy partner';

// Include the main layout template (with custom $content)
//include __DIR__ . "templates/_layout.html.php";
include_once "templates/_layout.html.php";

// adding some comment in here
