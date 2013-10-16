<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TUGAS TAMBAHAN</title>
</head>

<body>
<form method="post">
<h1 align ="center">KALKULATOR SEDERHANA</h1>
<h3 align ="center"> Oleh Umi Kulsum </h3>
<table align ="center">
	<tr>
		<td align="center"><b>Angka 1<b></td>
		<td><b>Operator</b></td>
		<td align="center"><b>Angka 2<b></td>
	</tr>
	<tr>
		<!-- MEMINTA MASUKKAN BERUPA ANGKA-->
		<td><input type="number" name="angka1" 
		<!-- PREFILLING PADA TEXT FIELD NUMBER-->
		value="<?php 
			echo isset($_POST['angka1'])?$_POST['angka1']: ''; ?>" required placeholder= "Masukkan Angka"/></td>
		<td align="center"><select name="operator">
		<option></option>
		<option value ="+"
			<!-- PREFILLING DARI OPERATOR YANG DIGUNAKAN SEBELUMNYA-->
			<?php if(isset($_POST['operator']) && $_POST['operator'] == '+'){
			echo 'selected="seleted"';
			}
			?>
		>+</option>
		<option value ="-" 
			<?php if(isset($_POST['operator']) && $_POST['operator'] == '-'){
			echo 'selected="seleted"';
			}
			?>
		>-</option>
		<option value ="*" 
			<?php if(isset($_POST['operator']) && $_POST['operator'] == '*'){
			echo 'selected="seleted"';
			}
			?>
		>*</option>
		<option value ="/" 
			<?php if(isset($_POST['operator']) && $_POST['operator'] == '/'){
			echo 'selected="seleted"';
			}
			?>
		>/</option>
		</select></td>
		<td><input type="number" name="angka2" 
		value="<?php 
			echo isset($_POST['angka2'])?$_POST['angka2']: ''; ?>" required placeholder= "Masukkan Angka"/></td>
		<td>=</td>
		<?php
			if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
				$angka1 = $_POST['angka1'];
				$angka2 = $_POST['angka2'];
			}else{
				$angka1 = "0";
				$angka2 = "0";
			}
			if(isset($_POST['operator'])){
				$operator =$_POST['operator'];
			}else{
				$operator ="";
			}
			//kondisi yang digunakan untuk mengambil keputusan hasil dari pemrosesan
			switch($operator){
				case "+":
					$hasil = $_POST["angka1"] + $_POST["angka2"];
				break;
				case "-":
					$hasil = $_POST["angka1"] - $_POST["angka2"];
				break;
				case "*":
					$hasil = $_POST["angka1"] * $_POST["angka2"];
				break;
				case "/":
					$hasil = $_POST["angka1"] / $_POST["angka2"];
				break;
			}
		?>
		<td><input type="text" name="hasil"  value="<?php $akhir=$_GET["$hasil"]; echo $akhir;?>"></td>
		<td><input type="submit" name="Aritmatika" value="Hitung"></td>
	</tr>

</table>
</form>
</body>
</html>