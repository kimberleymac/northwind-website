<?php
//Setup for the page
//Config
$title = "Services";

// Get list of services (e.g. from a database)
$services = [
    // "name" => "description",
    "Strategic Bulk Provisioning Solutions" => "Northwind Traders delivers high-volume food and beverage products to valued partners, ensuring supply chain continuity while bravely pretending that someone, somewhere, understands the difference between 'bulk' and 'too much'.",

    "Advanced Inventory Visibility Services" => "Our cutting-edge inventory systems provide real-time stock insights, empowering businesses to make informed decisions—or at least confidently blame the system when something inevitably goes missing.",

    "End-to-End Order Fulfilment Excellence" => "From order placement to final delivery, Northwind ensures a seamless fulfilment experience, carefully coordinating every step while hoping customers never ask, 'Where is my order?' before we figure it out ourselves.",

    "Integrated Logistics & Distribution Management" => "We optimise transportation routes and delivery schedules to maximise efficiency, reduce costs, and ensure that goods arrive on time—give or take a 'minor' traffic incident or three.",

    "Global Supplier Relationship Management" => "Northwind maintains strong partnerships with international suppliers, negotiating quality and pricing while mastering the fine art of polite emails that say, 'Please fix this immediately.'",

    "Premium Client Engagement Services" => "Our dedicated account management team provides personalised support, ensuring every client feels valued, heard, and gently redirected when requesting something completely unreasonable.",

    "Dynamic Product Catalogue Optimisation" => "We maintain a comprehensive and up-to-date catalogue of offerings, enabling customers to browse, compare, and occasionally wonder why there are 17 nearly identical products.",

    "Data-Driven Sales Intelligence & Reporting" => "Northwind delivers actionable insights through detailed analytics, transforming raw data into meaningful reports—and colourful charts that make everything look more impressive.",

    "Reverse Logistics & Returns Processing" => "Our returns system ensures efficient handling of damaged or unwanted goods, maintaining customer satisfaction while quietly questioning how the item was broken in the first place.",

    "International Trade Compliance Advisory" => "We assist clients in navigating complex import/export regulations, ensuring all shipments meet legal requirements and avoiding the exciting adventure of customs delays."
];

// Test what happens when you have no services
// $services = [];
// unset($services);

// Start output buffering (trap the output instead of displaying it)
ob_start();

// Include the page-specific template/content
include_once "templates/_servicesPage.html.php";

// Stop output buffering (store output in $content variable)
$content = ob_get_clean();

//Test
//$content = 'howdy partner';

// Include the main layout template (with custom $content)
//include __DIR__ . "templates/_layout.html.php";
include_once "templates/_layout.html.php";

// adding some comment in here
