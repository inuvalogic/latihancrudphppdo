<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD dengan PDO</title>
</head>
<body>
	<h1>Ubah Artikel</h1>
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
		<form method="post">
			<p>
				<label for="judul">Judul</label><br>
				<input type="text" name="judul" style="width: 450px" value="<?php echo $row['judul']; ?>">
			</p>
			<p>
				<label for="isi">Isi</label><br>
				<textarea name="isi" style="width: 450px;height: 200px;"><?php echo $row['isi']; ?></textarea>
			</p>
			<p>
				<button type="submit" name="submit">Ubah</button>
				<a href="index.php">Batal</a>
			</p>
		</form>
		<?php

		if (isset($_POST['submit'])){
			$sql_update = "UPDATE `artikel` SET `judul` = ?, `isi` = ? WHERE `id` = ?";
			$query = $pdo->prepare($sql_update);
			$query->bindParam(1, $_POST['judul']);
			$query->bindParam(2, $_POST['isi']);
			$query->bindParam(3, $row['id']);
			$query->execute();

			?>
			<p>Data berhasil diubah. <a href="index.php">kembali ke Home</a></p>
			<?php
		}

	}
	?>
</body>
</html>