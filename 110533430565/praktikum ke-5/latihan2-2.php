<html>
<head>
        <title>Membuat Database Latihan 2</title>
</head>
<body>
<?php 
require_once("koneksi.php");

$db_name="myweb";
$res=mysql_query("
        create table mahasiswa
        (nim varchar(12) not null,
        nama varchar(40) not null,
        alamat varchar(100),
        primary key(nim)
                )ENGINE=MyISAM
        ");
if ($res) {
        echo "Table  Created";
        mysql_close();
}
else
{
        echo mysql_error();
}
 ?>

 
</body>
</html>