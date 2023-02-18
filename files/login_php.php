<?php
include_once "config.php";

if(isset($_POST['login'])){
   if(isset($_POST['email']) < 1) echo "email is required";
   else if(isset($_POST['password']) < 1) echo "Password is required";
   else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query= $conn->query("SELECT * FROM whatsapp WHERE email = '$email'");
        if($query->num_rows == 0){
            echo "Account does not exist!";
        }else{
            $verify=$query->fetch_assoc();
            //echo var_dump(password_verify($password,$verify['password']));
            if(password_verify($password,$verify['password'])){
                session_start();
                if(isset($_POST['login'])){
                    // $data=array(
                    // 'fname'=> "ivan"
                    // );
                    $_SESSION['user']=$verify;
                    header('Location: ../index.php');
                }
            }else{
                echo "Wrong password";
            }
        }
        
    }
}

?>