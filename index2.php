<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD dengan PDO</title>
	<style>
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}

	.modalDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
	}

	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
	</style>
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
						<a href="#openModal<?php echo $data['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
						<div id="openModal<?php echo $data['id']; ?>" class="modalDialog">
							<div>
								<a href="#close" title="Close" class="close">X</a>
								<form method="post" action="ubah.php?id=<?php echo $data['id']; ?>">
									<p>
										<label for="judul">Judul</label><br>
										<input type="text" name="judul" style="width: 300px" value="<?php echo $data['judul']; ?>">
									</p>
									<p>
										<label for="isi">Isi</label><br>
										<textarea name="isi" style="width: 300px;height: 200px;"><?php echo $data['isi']; ?></textarea>
									</p>
									<p>
										<button type="submit" name="submit">Ubah</button>
										<a href="#close">Batal</a>
									</p>
								</form>
							</div>
						</div>
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