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
    <img class="h-64" src="./img/logog.png" alt="#"><br>

        <form method="post" > <!--action="./api/api.registrazione.php"--> 
            <input type="text" name="nome" placeholder="Nome...">
            <input type="text" name="cognome" placeholder="Cognome...">
            <input type="email" name="email" placeholder="Email...">
            <input id="pw" type="password" name="password" placeholder="Passwod...">
            <input id="repw" type="password" name="repassword"placeholder="Ripeti password..." >
            <button type="submit" name="salva" id="salva" onclick="controlli()">Salva</button>
        </form><br>
    </div>
    <script>
        function controlli() {
        console.log("ciao");
        var pw      =   document.getElementById('pw').value;
        var repw    =   decument.getElementById('repw').value;
        }    
        

    </script>
</body>
</html>

