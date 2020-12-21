<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <body>
        <?php
         echo $reslt;
         ?>
        <center>
        <div class ="floating-box">
            <form action="" method="POST">
                <label for="uname">Username</label>
                <input type="text" id="username" name="username" value="" required="required"><br><br>
                <label for="pwd">Password</label>
                <input type="password" id="password" name="password" required="required"><br>
                <input name="submit" type="submit" id="submit" value="Login"><br>
                <p>New User <a href="register.php">Daftar disini</a></p>   
        </center> 
    </body>
</html>    

