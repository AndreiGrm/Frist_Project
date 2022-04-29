<?php
include ('./db/db.php');

if(isset($_POST['salva'])){
    $nome = $cognome = $email = $password = $repassword = '';
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    function validateFormData($formData){
        $formData = trim (stripslashes(htmlspecialchars($formData)));
        return $formData;
    }
    if(!$nome){
        $nameError  =   "*Enter name <br>";
    }else{
        $nome = validateFormData($nome);
    }

    if(!$cognome){
        $cognomeError  =   "*Enter cognome <br>";
    }else{
        $cognome = validateFormData($cognome);
    }

    if(!$email){
        $emailError  =   "*Enter email <br>";
        
    }else{
        $email = validateFormData($email);
    }

    if(!$password){
        
        $passwordError  =   "*Enter password <br>";
    }else{
        $password = validateFormData($password);
    }
    if($nome&& $cognome&& $email&& $password ){
        echo $password;
        $hashPw = password_hash($password,PASSWORD_DEFAULT);
        echo $hashPw;
        $query = "INSERT INTO users(id, nome, cognome, email, password) VALUES (NULL, '$nome', '$cognome', '$email', '$hashPw')";
        if (mysqli_query($conn, $query)){
            echo"nuovo";
        }else{
            echo"error";
        }
}
}
?>
