<?php
include ('./api/api.register.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    
    <title>Document</title>
</head>
<body>
    <div id="container">
    <img class="h-64" src="./img/logog.png" alt="#"><br>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
            <p><?php echo $nameError ?></p>
            <input type="text" name="nome" placeholder="Nome...">
            <p><?php echo $cognomeError ?></p>
            <input type="text" name="cognome" placeholder="Cognome..." >
            <p><?php echo $emailError ?></p>
            <input type="email" name="email" placeholder="Email..." >
            <p><?php echo $passwordError ?></p>
            <input id="pw" type="password" name="password" placeholder="Passwod..." ><br>
            
            
            <button type="submit" name="salva" id="salva" onclick="controlli()">Salva</button>
        </form><br>
            <button><a href="./login.php">Back</a></button>
    </div>
    <script>
       
        

    </script>
</body>
</html>

