<?php
include ('db/db.php');
$query = "SELECT * FROM clienti";
 $results = mysqli_query($conn, $query);
 $clienti  = mysqli_fetch_all($results, MYSQLI_ASSOC);
 mysqli_free_result($results);
if(isset($_POST['salva'])){
    $azienda = $_POST['azienda'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $iban = $_POST['iban'];
    function validateFormData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData ;
    }
    $azienda=validateFormData($azienda);
    $telefono=validateFormData($telefono);
    $email=validateFormData($email);
    $iban=validateFormData($iban);
    if($azienda && $telefono && $email && $iban){
        echo $azienda.$telefono.$email.$iban;
        $query= "INSERT INTO clienti (id, azienda, telefono, email, iban) VALUES (NULL, '$azienda', '$telefono', '$email', '$iban') ";
        $azienda=$telefono=$email=$iban = "";
        echo $azienda.$telefono.$email.$iban;
        
        if (mysqli_query($conn, $query)){
        }else{
            echo"";
        }
    }else{
        echo "";
    }
    
}


?>