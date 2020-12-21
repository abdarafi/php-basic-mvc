<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    session_start();
    include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/models/login_model.php';

    class LoginController {
        public $model;

        public function __construct()
        {
            $this->model = new LoginModel();
        }

        public function run() {
            $reslt = $this->model->getLogin();

            if($reslt=='empty_uname') {
                include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/views/public/login_display.php';
            } else if($reslt=='empty_password') {
                include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/views/public/login_display.php';
            } else if($reslt=='wrong_username_password') {
                include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/views/public/login_display.php'; 
            } else if($reslt=='role_admin') {
                include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/views/public/admin_display.php';
            } else if($reslt=='role_customer') {
                include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/views/public/profile_display.php';
            } else {
                include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/views/public/login_display.php'; 
            }
        }
    }
?>