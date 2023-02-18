<?php
session_start();
include "config.php";
//$text= "";
// $id=0;
// if(isset($_GET['edt'])){
//     $edt=$_GET['edt'];
//     $query=mysqli_query($conn,"SELECT * FROM whatsapp WHERE id='$edt'") or die($conn->error);
//     $row=$query->fetch_assoc();
//      $text=$row[$_SESSION['user']['fname']. " " . $_SESSION['user']['lname']];
// $id=$row['id'];
// }
if (isset($_POST['fname'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    unset($_SESSION['user']['fname']);
    unset($_SESSION['user']['lname']);
    $_SESSION['user']['fname'] = $fname;
    $_SESSION['user']['lname'] = $lname;
    $id = $_POST['id'];
    $_SESSION['user']=$name;
    // print_r($_FILES);
    if ($_FILES['file']['tmp_name']!="") {
        $file = $_FILES['file'];
        $tmp = $file['tmp_name'];
        $name = $file['name'];
        $_SESSION['user']['img']=$name;
        move_uploaded_file($tmp, "./uploads/$name");
        $sql = "UPDATE whatsapp SET img='$name' WHERE id='$id'";
        //echo $sql;
        $update = mysqli_query($conn, $sql) or die($conn->error);
    }
    $query2 = mysqli_query($conn, "UPDATE whatsapp set fname='$fname',lname='$lname'  WHERE id='$id'") or die($conn->error);
        header('location:../?img=edit');

    // $q=$conn->query("SELECT * FROM whatsapp WHERE id='$id'") or die($conn->error);
    // $user_data=$q->fetch_assoc();
    // unset($_SESSION['user']);
    // $_SESSION['user']= $user_data;
    if ($query2) {
        echo "done";
        // echo "<br>";
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";

    }
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
