<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Tugas Rumah 1 : FORM LOGIN</title>
<meta name="description" content="slick Login">
<meta name="author" content="Webdesigntuts+">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="placeholder.js"></script>
</head>
<script>

function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi");
   document.getElementById("username").focus();
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf");
  	 document.getElementById("username").focus();
  	return false;
  }


 
  return true;
}
</script>
<body>
<form method="post" name="myForm" onsubmit="return validateForm()" id="slick-login">
<label for="username">username</label><input type="text" name="username" placeholder="umi">
<label for="password">password</label><input type="password" name="pass" placeholder="password">
<input type="submit" name="submit" value="Login">
</form>
<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='umi')&&(isset($_POST['pass'])&&$_POST['pass']=='umi')) {
		echo "<center>Selamat datang, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username dan/atau password salah')</script>";
	}
}
 ?>
</body>
</html>