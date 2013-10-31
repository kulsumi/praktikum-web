<html>
<head>
        <title>Tambah Data Latihan 3</title>
</head>
<body>
<?php 
require_once("koneksi.php");
 ?>

 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
         <table>
                 <tr>
                         <td>NIM</td>
                         <td><input type="text" name="nim"></td>
                 </tr>
                 <tr>
                         <td>Nama</td>
                         <td><input type="text" name="nama" size="40"></td>
                 </tr>
                 <tr>
                         <td>Alamat</td>
                         <td><input type="text" name="alamat" size="60"></td>
                 </tr>
                 <tr>
                         <td></td>
                         <td><input type="submit" name="simpan" value="Simpan"></td>
                 </tr>
         </table>
 </form>
</body>
</html>
<?php 
if (isset($_POST['nim'])&&isset($_POST['nama'])) {
        
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];

        $sql="insert into mahasiswa values('".$nim."', '".$nama."','".$alamat."')";

        $res=mysql_query($sql);
        if ($res) {
                echo "Data berhasil ditambah";
                require_once("latihan3.php");
        }
        else
        {
                echo "gagal menambah data";
                echo mysql_error();
        }
}
 ?>