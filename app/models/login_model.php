<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    include $_SERVER['DOCUMENT_ROOT'].'/php-basic-mvc/app/config/config.php';
    
    class LoginModel {
        public function getLogin() 
        {
            $db= pg_connect("host=DB_HOST port=5432 dbname=DB_NAME user=DB_USER password=DB_PASSWORD");
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $query = "SELECT bas_user.username, bas_user.password, bas_role.name FROM bas_user 
            LEFT JOIN bas_user_role ON bas_user.id=bas_user_role.user_id RIGHT JOIN bas_role ON bas_user_role.role_id=bas_role.id
            WHERE username='$username' AND password=md5('$password');";
            $result = pg_query($db, $query);

            if (empty($username))
            {
                return "<script type='text/javascript'>alert('Please fill up username');</script>";
            }
            else if(empty($password))
            {
                return "<script type='text/javascript'>alert('Please fill up password');</script>";
            }
            else if(!$result || pg_num_rows($result) !=1)
            {
                return "<script type='text/javascript'>alert('Wrong username/password');</script>";
            }
            else if(pg_fetch_assoc($result)['role']=='admin')
            {
                $_SESSION['uname']=$username;
                return "<script type='text/javascript'> document.location = 'localhost/admin.php'; </script>";
            }
            else
            {
                $_SESSION['uname']=$username;
                return "<script type='text/javascript'> document.location = 'localhost/profile.php'; </script>";
            }

            function InputValidation($input)
	        {
                $input = trim($input);
                $input = stripslashes($input);
                $input = htmlspecialchars($input);
                return $input;
	        }
        }
    }
?>