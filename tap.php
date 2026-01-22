<?php include 'config.php';
if(isset($_GET['g'])){
$g=floatval($_GET['g']);
$conn->query("UPDATE users SET balance=balance+$g WHERE id=".$_SESSION['user']);
}
header("Location: dashboard.php");