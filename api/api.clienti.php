<?php
include ('db/db.php');
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
        $query= "INSERT INTO clienti (id, azienda, telefono, email, iban) VALUES (NULL, '$azienda', '$telefono', '$email', '$iban') ";
        if (mysqli_query($conn, $query)){
            $azienda=$telefono=$email=$iban = "";
        }else{
            echo"";
        }
    }else{
        echo "";
    }
    
}


?>