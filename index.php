<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD dengan PDO</title>
</head>
<body>
	<h1>List Artikel</h1>
	
	<p><a href="tambah.php">Tambah Artikel Baru</a></p>

	<?php
	
	$sql_select_artikel = "SELECT * FROM `artikel` ORDER BY `id` ASC";
	$query = $pdo->prepare($sql_select_artikel);
	$query->execute();
	$row = $query->fetchAll();

	if ($row==false){
		echo 'Belum ada artikel';
	} else {

		?>
		<table border="1" cellpadding="5" cellspacing="0">
			<thead>
				<th>ID</th>
				<th>Judul Artikel</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php foreach ($row as $data) { ?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><a href="detail.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?></a></td>
					<td>
						<a href="ubah.php?id=<?php echo $data['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php
		
	}
	?>
</body>
</html>