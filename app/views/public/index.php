<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    include_once $_SERVER['DOCUMENT_ROOT']."/basicapp/app/controllers/login_controller.php";

    $controller = new LoginController();
    $controller->run();
?>