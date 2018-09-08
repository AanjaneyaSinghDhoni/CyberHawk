<?php
session_start();
$user="admin";
$pass=1234;
$n=$_REQUEST['name'];
$p=$_REQUEST['password'];
$c=$_REQUEST['cap'];
if(isset($_REQUEST['Submit']))
{
	if($user==$n && $pass==$p)
	{
		if($c==$_SESSION['ca'])
		{
		$_SESSION['name']=$n;
		header("location: admin.php");
		exit();
		}else
		{
			echo "invalid text";
		
		}

	}else
	{
		echo "invalid username/password";
	
	}

}
if(!empty($_GET['logout']))
{
	session_unset();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Login Form </strong></div></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><label>
        <input type="text" name="name" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input type="password" name="password" />
      </label></td>
    </tr>
    <tr>
      <td><p>Enter Here</p>
      <p><img src="arith_captcha.php" />&nbsp; </p></td>
      <td><label>
        <input type="text" name="cap" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="checkbox" name="checkbox" value="checkbox" />
      Remember Me </label></td>
      <td>Forget Password </td>
    </tr>
  </table>

</form>
</body>
</html>
