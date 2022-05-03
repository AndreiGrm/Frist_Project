<?php
include ('db/db.php');
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM clienti WHERE id =$id";
        $result = mysqli_query($conn, $sql);
        $utente = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($cliente['azienda']);?></h1>
    
</body>
</html>