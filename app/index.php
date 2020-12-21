<?php  
    require_once("controllers/Login.php");

    $controllers = new LoginController();
    $controllers->run();
?>