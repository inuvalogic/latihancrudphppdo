<?php

include 'db.php';

$id_artikel = $_GET['id'];

$sql_select_artikel = "SELECT * FROM `artikel` WHERE `id` = ?";
$query = $pdo->prepare($sql_select_artikel);
$query->execute(array($id_artikel));
$row = $query->fetch();

if ($row==false){
	echo 'ID Artikel salah';
} else {
	$sql_delete = "DELETE FROM `artikel` WHERE `id` = ?";
	$query = $pdo->prepare($sql_delete);
	$query->execute(array($row['id']));
	?>
	<p>Artikel berhasil dihapus. <a href="index.php">kembali ke Home</a></p>
	<?php
}