<?php include 'config.php';
if(!isset($_SESSION['user'])) header("Location: login.php");
$u=$conn->query("SELECT * FROM users WHERE id=".$_SESSION['user'])->fetch_assoc();
?>
<h2>Balance: $<?= $u['balance'] ?></h2>
<a href="tap.php?g=0.05">Watch Video +0.05</a><br>
<a href="tap.php?g=0.10">Watch Video +0.10</a><br>
<a href="logout.php">Logout</a>

<a href="settings.php">⚙ Paramètres</a> |
<a href="withdraw.php">💸 Retrait</a> |
<a href="invest.php">🚀 Investir</a> |
<a href="logout.php">Déconnexion</a>
