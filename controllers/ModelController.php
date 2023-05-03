<?php

require_once 'models/Model.php';

// Define the base URL for the project
$baseURL = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
$baseURL .= $_SERVER['HTTP_HOST'];
$baseURL .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

$logo = "Coca-Cola 3D Models";

$pageTitle = $logo;

class ModelController
{

    public function getModelById($id)
    {
        $model = new Model();
        return $model->getById($id);
    }

    public function getAllModels()
    {
        $model = new Model();
        return $model->getAll();
    }

    public function index()
    {
        global $baseURL, $logo, $pageTitle;

        // Create a new instance of the ProductModel
        $model = new Model();

        // Fetch all products from the database
        $products = $model->getAll();

        // Include the index.php view file and pass in the $products variable
        include 'views/index.php';
    }

    public function product($id)
    {
        global $baseURL, $logo, $pageTitle;

        // Create a new instance of the ProductModel
        $model = new Model();


        // Fetch all products from the database
        $products = $model->getAll();

        // Fetch all products from the database
        $product = $model->getById($id);

        // Include the index.php view file and pass in the $products variable
        include 'views/coke.php';
    }

    public function productJson($id)
    {
        global $baseURL, $logo, $pageTitle;

        // Create a new instance of the ProductModel
        $model = new Model();


        // Fetch all products from the database
        $products = $model->getAll();

        // Fetch all products from the database
        $product = $model->getById($id);

        header('Content-Type: application/json');

        // Include the index.php view file and pass in the $products variable
        include 'views/coke.json.php';
    }
}
