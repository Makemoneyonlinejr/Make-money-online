<?php include 'config.php';
if(!isset($_SESSION['user'])) header("Location: login.php");

if(isset($_POST['amount'])){
  $amount=floatval($_POST['amount']);
  $conn->query("UPDATE users SET balance=balance-$amount WHERE id=".$_SESSION['user']);
  $msg="Demande envoyée ✔";
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
<h2>💸 Retrait Mobile Money</h2>
<form method="post">
<input name="amount" placeholder="Montant à retirer">
<button>Envoyer la demande</button>
</form>
<?= $msg ?? "" ?>
<a href="dashboard.php">⬅ Retour</a>
</div>
