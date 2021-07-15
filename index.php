<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
    //list category
    case "Library":$controller->listBooks();break;
    case "search":$controller->searchBooks();break;


    default: $controller->Home();
}