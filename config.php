<?php
$host="localhost"; $user="root"; $pass=""; $db="mmo2026";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){die("DB Error");}
session_start();
?>

