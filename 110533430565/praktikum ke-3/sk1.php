<html>
<head>
	<title>Studi Kasus 1: Preselecting pada Seleksi</title>
</head>
<body>
	<h2>Sistem Informasi SKS Matakuliah</h2>
	<br><strong>Matakuliah : </strong></br>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="matkul">
			<option value="web" 
			<?php if (isset($_POST['matkul']) && $_POST['matkul']=='web') {
				echo "selected";
			} ?>
			>Praktikum Pemrograman Web</option>
			<option value="prakmulmed" <?php if (isset($_POST['matkul'])&&$_POST['matkul']=='prakmulmed') {
				echo "selected";
			} ?>>Praktikum Multimedia</option>
			<option value="rpl" 
			<?php if (isset($_POST['matkul'])&&$_POST['matkul']=='rpl') {
				echo "selected";
			} ?>
			>Rekayasa Perangkat Lunak</option>
			<option value="adsi" 
			<?php if (isset($_POST['matkul'])&&$_POST['matkul']=='adsi') {
				echo "selected";
			} ?>
			>Analisis dan Desain Sistem Informasi</option>
			<option value="mulmed" 
			<?php if (isset($_POST['matkul'])&&$_POST['matkul']=='mulmed') {
				echo "selected";
			} ?>
			>Multimedia</option>
		</select>
		<br><em>*Silakan pilih matakuliah untuk menampilkan jumlah SKS</em>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['matkul'])) {
		switch ($_POST['matkul']) {
			case 'web':
				echo "<div id='sks'>SKS Praktikum Pemrograman Web: 2</div>";
				break;

			case 'prakmulmed':
				echo "<div id='sks'>SKS Praktikum Multimedia: 1</div>";
				break;

			case 'rpl':
				echo "<div id='sks'>SKS Rekayasa Perangkat Lunak: 3</div>";
				break;

			case 'adsi':
				echo "<div id='sks'>SKS Analisis dan Desain Sistem Informasi: 3</div>";
				break;

			case 'mulmed':
				echo "<div id='sks'>SKS Multimedia: 2</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>