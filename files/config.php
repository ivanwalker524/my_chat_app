<?php
$conn=mysqli_connect("localhost","root","", "whatsappchat");
if(!$conn){
    echo "Database connected" .mysqli_connect_error();
}
// echo phpversion();
// try{
//     $conn= new mysqli("localhost","root","","whatsappc");
// }catch (Exception $expection){
//     echo "<h3>Failed to connect to database.</h3>";
//     echo $expection;
//     exit;
// }
?>