<?php session_start();
 
 include ('./api/api.clienti.php');
 
 
 

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/clienti.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <?php include('nav.php') ?>
        <div>
            <h1>welcome <?php echo $_SESSION['loggedInUser'] ?></h1>
            <h2>cliente richiesto</h2>
            <button onclick="nuovo()">+ Crea nuovo cliente</button>
            <button name="refresh">Refresh</button>
        </div>
        <div id="form" style="display:none;">
            <form action="" method="post" >
                <h4>Nuovo cliente</h4>
                <input type="text" id="az" name="azienda" placeholder="azienda"><br>
                <input type="text" id="te" name="telefono" placeholder="telefono"><br>
                <input type="text" id="em" name="email" placeholder="email"><br>
                <input type="text" id="ib" name="iban" placeholder="iban"><br>
                <button onclick="anulla()">Anulla</button>
                <input type="submit" name="salva" value="Salva">
            </form>
        </div>
        <table>
            <thead>
                <th>
                    <td>#Id</td>
                    <td>Azienda</td>
                    <td>Telefono</td>
                    <td>Email</td>
                    <td>IBAN</td>
                </th>
            </thead>
            <tbody>
                <?php foreach($clienti as $cliente){ ?>
                <tr>
                    <th>
                        <td><?php echo htmlspecialchars($cliente['id']);?></td>
                        <td><?php echo htmlspecialchars($cliente['azienda']);?></td>
                        <td><?php echo htmlspecialchars($cliente['telefono']);?></td>
                        <td><?php echo htmlspecialchars($cliente['email']);?></td>
                        <td><?php echo htmlspecialchars($cliente['iban']);?></td>
                        <td><a href="cliente.php?id=<?php echo htmlspecialchars($cliente['id']); ?>">info</a><button>Elimina</button></td>
                    </th>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
    <script>
        
        var form = document.getElementById('form');
        var az = document.getElementById('az');
        var te = document.getElementById('te');
        var em = document.getElementById('em');
        var ib = document.getElementById('ib');
        function nuovo(){
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
        function anulla(){
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
                az.innerHTML = "";
                te.innerHTML = "";
                em.innerHTML = "";
                ib.innerHTML = "";
            }
        }



        
    </script>
</body>
</html>