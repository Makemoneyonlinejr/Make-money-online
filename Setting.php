<?php include 'config.php';
if(!isset($_SESSION['user'])) header("Location: login.php");
$u=$conn->query("SELECT * FROM users WHERE id=".$_SESSION['user'])->fetch_assoc();
?>
<link rel="stylesheet" href="style.css">
<div class="container">
<h2>⚙ Paramètres</h2>
<p>📱 Téléphone: <?= $u['phone'] ?></p>
<p>💰 Solde: $<?= $u['balance'] ?></p>
<a href="dashboard.php">⬅ Retour</a>
</div>
