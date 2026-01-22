<?php include 'config.php';
if(isset($_POST['phone'])){
$p=$_POST['phone']; $pw=$_POST['password'];
$q=$conn->query("SELECT * FROM users WHERE phone='$p'"); $u=$q->fetch_assoc();
if($u && password_verify($pw,$u['password'])){
$_SESSION['user']=$u['id']; header("Location: dashboard.php");
}}
?>
<form method="post"><input name="phone"><input name="password" type="password"><button>Login</button></form>