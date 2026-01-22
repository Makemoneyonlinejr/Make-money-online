<?php include 'config.php';
if(isset($_POST['phone'])){
$phone=$_POST['phone']; $pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
$conn->query("INSERT INTO users(phone,password) VALUES('$phone','$pass')");
header("Location: login.php");
}
?>
<form method="post"><input name="phone" placeholder="Phone"><input name="password" type="password"><button>Register</button></form>