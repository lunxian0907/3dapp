<?php
// Include the necessary files
require_once 'controllers/ModelController.php';

// Get the ID parameter from the query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Create a new instance of the ProductController
$productController = new ModelController();

// Define a route for the index page
$productController->productJson($id);