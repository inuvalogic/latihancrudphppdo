<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD dengan PDO</title>
</head>
<body>
	<h1>Detail Artikel</h1>
	
	<?php
	
	$id_artikel = $_GET['id'];

	$sql_select_artikel = "SELECT * FROM `artikel` WHERE `id` = ?";
	$query = $pdo->prepare($sql_select_artikel);
	$query->execute(array($id_artikel));
	$row = $query->fetch();

	if ($row==false){
		echo 'ID Artikel salah';
	} else {
		?>
		<h2><?php echo $row['judul']; ?></h2>
		<p><?php echo $row['isi']; ?></p>
		<a href="index.php">kembali ke Home</a></p>
		<?php
	}
	?>
</body>
</html>