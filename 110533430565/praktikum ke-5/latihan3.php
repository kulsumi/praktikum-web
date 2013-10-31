<html>
<head>
        <title>Manipulasi Data Latihan 3</title>
</head>
<body>
<?php 
require_once("koneksi.php");

$sql="select * from mahasiswa";
$res=mysql_query($sql);
if ($res) {
        if (mysql_num_rows($res)) {?>

        <table border=1 cellpadding=5 cellspacing=1>
                <tr><th>#</th>
                        <th width=100>NIM</th>
                        <th width=150>Nama</th>
                        <th>Alamat</th>
                </tr>
                <?php
                $i=1;
                while($row=mysql_fetch_row($res)){
                        ?>
                        <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                        </tr>
                        <?php
                        $i++;
                }
                ?>
        </table>
        <?php
        }else
        {
                echo "data tidak ditemukan";
        }
        mysql_close();
}
 ?>

</body>
</html>