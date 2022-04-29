<?php 
    include ('db/db.php');
    
    if(isset($_POST['login'])){
        function validateFromData ($formData){
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        $formUser     = validateFromData ($_POST['username']);
        $formPassword = validateFromData ($_POST['password']);
        $query        = "SELECT nome,email,password FROM users WHERE nome='$formUser' ";
        $results      = mysqli_query($conn, $query);
        if(mysqli_num_rows($results)> 0){
            while($row = mysqli_fetch_assoc($results)){
                $user       =   $row ['nome'];
                
                $hashedPass =   $row ['password'];
                
                if(password_verify($formPassword, $hashedPass) ){
                    session_start();
                    $_SESSION['loggedInUser']=$user;
                    header("Location:index.php");
                }else{
                    $loginError = "wrong username or pw";
                }  
            }
        }else{
            $loginError = "no data in db";
        }
        mysqli_close($conn);
    }
    //stare in compagnia,lavoro , farmare, giocare
?>