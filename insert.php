<?php
error_reporting(E_ALL);
include_once "./config.php";
// if(isset($_POST['create'])){
//     session_start();
//     header('Location: user.php');
// }
// if(isset($_POST['login'])){
//     header('Location: user.php');
// }
if(isset($_POST['create'])){
    if(strlen($_POST['fname']) < 1) echo "First name is required";
    else if(strlen($_POST['lname']) < 1) echo "Last name is required";
    else if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) 
    && !empty($_POST['passwrod'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql=mysqli_query($conn,"INSERT INTO 'whatsapp'(fname,lname,email,password) values('$fname','$lname','$email','$password')");
        if($sql){
            echo "Connected Successfully";
        }else{
            echo "Here is an error" . mysqli_error($conn);
        }
    }
}
?>