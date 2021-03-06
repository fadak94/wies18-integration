<?php

// Allow any site to fetch this result.
header("Access-Control-Allow-Origin: *");

// Set header to let browser know to expect json instead of html.
header("Content-Type: application/json; charset=UTF-8");

// Setup POST to be the only acceptable way to contact this page.
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Product class.
include_once '../classes/product.php';
$products_object = new \wiesapi\Product();

// Get the posted data.
// Ok, so this isn't self explanatory, but what does this do? Google it!
$product_data = json_decode(file_get_contents('php://input'));

// Setup response structure.
$response = [
    'results' => null
];

// Try to create product.
// Create similar responses as in the read.php file, depending on if the product
// was successfully created or not.
if (/* product was successfully created */) {
    // Set a suitable response code.
    // Set a readable message.
    // Add the newly created product to results.
} else {
    // Set a suitable response code.
    // Set a readable message.
}

// Format response.
// Same as last one.
