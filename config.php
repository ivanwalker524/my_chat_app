<?php
$conn=mysqli_connect("localhost","root","", "whatsappchat",);
if(!$conn){
    echo "Database connected" .mysqli_connect_error();
}
?>