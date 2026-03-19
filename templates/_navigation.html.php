<?php

// Navigation items
$navLinks = [
    "index.php" => "Home",
    "about.php" => "About us",
    "services.php" => "Our services",
    "contact.php" => "Contact",
];
// Get the currenlty-loaded page (PHP script), e.g. index.php
$currentPage = basename($_SERVER["SCRIPT_NAME"]);
//exit;

// print_r($_SERVER);
// exit;


?>


<ul>
    <!-- loop here -->
     <?php foreach($navLinks as $linkHref => $linkText): ?>

        <?php 
        // Check if current page
        // (condition) ? true: false
            $cssClass = ($linkHref === $currentPage) ? "active" : "";
            ?>
     <li class="<?= $cssClass?>"><a href="<?= $linkHref ?>"><?= $linkText ?></a></li>
     <?php endforeach; ?>
</ul>


<!-- <ul>
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="about.php">About</a></li>
    <li><a href="_contact.php">Contact</a></li>
    <li><a href="services.php">Services</a></li>

</ul> -->