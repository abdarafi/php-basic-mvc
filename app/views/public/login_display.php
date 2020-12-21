<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password">
            <button type="submit" name="submit">Login</button>
        </form>
    </body>
</html>