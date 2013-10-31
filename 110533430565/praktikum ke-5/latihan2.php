<html>
<head>
        <title>Membuat Database Latihan 2</title>
</head>
<body>
<?php 
require_once("koneksi.php");

$db_name="myweb";
$res=mysql_query("CREATE database ". $db_name);
if ($res) {
        echo "Database ". $db_name. " Created";
}
else
{
        echo mysql_error();
}
 ?>

 
</body>
</html>