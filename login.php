<?php
if(isset($_COOKIE[session_name()])){
    setcookie( session_name(),'', time()-86400, '/');
}
session_unset();

include ('api/api.login.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    
    <title>Document</title>
</head>
<body>
    <div>
    <p id="allert"><?php echo $loginError ?></p>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <img class="h-64" src="./img/logog.png" alt="#"><br>
            <input type="text" name="username" placeholder="User..."><br>
            <input type="password" name="password" placeholder="Password..."><br>
            <button type="submit" name=login>Login</button>
        </form><br>
        <label for="">Se non hai un account<br><button><a href="./register.php">Registrati</a></button></label>
    </div>
</body>
</html>

