<html>
<head>
	<title>Studi Kasus 2: Prefilling pada Checkbox</title>
</head>
<body>
	<h1>FESTIVAL MAKANAN KHAS INDONESIA</h1>
	<div id='info'>Vote Makanan Favorit Kamu Segera !</div>
	<em>Pilih MAFO (Makanan Favorit) yang kamu suka :</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="mafo[]" value="nasgor" 
		<?php if (isset($_POST['mafo'])) {

			foreach ($_POST['mafo'] as $key => $value) {
				if ($value=='nasgor') {
					echo "checked";
				}
		}
			
		} ?>
		>Nasi goreng<br>
		<input type="checkbox" name="mafo[]" value="pecel" 
		<?php if (isset($_POST['mafo'])) {

			foreach ($_POST['mafo'] as $key => $value) {
				if ($value=='pecel') {
					echo "checked";
				}
		}
			
		} ?>
		>Pecel Khas Madiun<br>
		<input type="checkbox" name="mafo[]" value="rendang"
		<?php if (isset($_POST['mafo'])) {

			foreach ($_POST['mafo'] as $key => $value) {
				if ($value=='rendang') {
					echo "checked";
				}
		}
			
		} ?>
		>Rendang Khas Padang<br>
		<input type="checkbox" name="mafo[]" value="sate"
		<?php if (isset($_POST['mafo'])) {

			foreach ($_POST['mafo'] as $key => $value) {
				if ($value=='sate') {
					echo "checked";
				}
		}
			
		} ?>
		>Sate Ayam Madura<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['mafo'])) {
		echo "<div id='pilihan'>Anda Memilih Makanan dibawah ini sebagai Makanan Favorit </div><br/>";
		echo "<ul>";
		foreach ($_POST['mafo'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>