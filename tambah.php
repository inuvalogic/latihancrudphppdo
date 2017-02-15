<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD dengan PDO</title>
</head>
<body>
	<h1>Tambah Artikel Baru</h1>
	<form method="post">
		<p>
			<label for="judul">Judul</label><br>
			<input type="text" name="judul" style="width: 450px">
		</p>
		<p>
			<label for="isi">Isi</label><br>
			<textarea name="isi" style="width: 450px;height: 200px;"></textarea>
		</p>
		<p>
			<button type="submit" name="submit">Tambah</button>
			<a href="index.php">Batal</a>
		</p>
	</form>
	<?php

	if (isset($_POST['submit'])){
		$sql_insert = "INSERT INTO `artikel` (`judul`,`isi`) VALUES (?,?)";
		$query = $pdo->prepare($sql_insert);
		$query->bindParam(1, $_POST['judul']);
		$query->bindParam(2, $_POST['isi']);
		$query->execute();
		?>
		<p>Data berhasil ditambahkan. <a href="index.php">kembali ke Home</a></p>
		<?php
	}

	?>
</body>
</html>