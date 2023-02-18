<?php
error_reporting(E_ALL);
include_once "./config.php";
if(isset($_POST['create'])){
    if(strlen($_POST['fname']) < 1) echo "First name is required";
    else if(strlen($_POST['lname']) < 1) echo "Last name is required";
    else if(strlen($_POST['email']) < 1) echo "Email is required";
    else {
        !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) 
        && !empty($_POST['passwrod']);
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashed= password_hash($password,PASSWORD_DEFAULT);
        $check=mysqli_query($conn,"SELECT * FROM whatsapp WHERE email= '$email'");
        if(mysqli_num_rows($check) > 0){
            echo "Email is already exist";
        }
        else{
            $sql=mysqli_query($conn,"INSERT INTO whatsapp(fname,lname,email,password,img) values('$fname','$lname','$email','$hashed','$file')");
            if($sql){
                echo "Account created  successfully";
            }else{
                echo "Here is an error" . mysqli_error($conn);
            }
        }
    }
}

?>