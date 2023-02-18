<?php
include "config.php";
if(isset($_POST['search'])){
    $search=$_POST['search'];
    $s_query=$conn->query("SELECT * FROM whatsapp WHERE lname Like %'$search'%") or die($conn->error);
    while($row=$s_query->fetch_assoc());
}