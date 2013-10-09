<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Latihan 3_2 : Prefilling Radio Button</title>
</head>

<body>
	<form action=" <?php $_SERVER['PHP SELF']; ?>" method = "post">
    Jenis Kelamin
    <input type="radio" name="sex" value="Pria" checked
    <?php
	if ($_POST['sex'] == 'Pria'){
		echo 'checked="checked"';
	}
	?>
    />Pria
    <input type="radio" name="sex" value="Wanita"
    <?php
	if ($_POST['sex'] == 'Wanita'){
		echo 'checked="checked"';
	}
	?>
    />Wanita <br />
    
    <input type="submit" value="ok" />
    </form>
  
</body>
</html>