<?php
// Include the necessary files
require_once 'controllers/ModelController.php';



// Create a new instance of the ProductController
$productController = new ModelController();

// Define a route for the index page
$productController->index();
