<?php
session_start();
if(isset($_GET['logout'])) unset($_SESSION['user']);
$page='login';
if(isset($_SESSION['user'])){
     $page='dashboard';
}else if(isset($_GET['ref'])){
     $page=$_GET['ref'];
}
require "files/header.php";
require "files/$page.php";
require "files/footer.php";