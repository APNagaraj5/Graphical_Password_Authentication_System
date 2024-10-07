<?php

session_start();

session_destroy();

session_start();

ob_start();

?>

<!DOCTYPE>

<html>
<head><link rel="stylesheet" href="css.css" type="text/css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="https://www.phpcable.com/img/favicon.png" type="image/ico">

<title>Three-Level Password Auth | Login</title>



<script>

			function validate()

			{

			var name=document.forms["login"]["name"].value;

			var password=document.forms["login"]["password"].value;

			

			

			if ((password==null || password=="") && !(name==null || name==""))

			{

			alert("Please enter your password !!");return false;

			}

			

			if (!(password==null || password=="") && (name==null || name=="")  )

			{

			alert("Please enter your name !!");return false;

			}

			

			if ((name==null || name=="") && (password==null || password==""))

			{

			alert("Please enter your name !! \nPlease enter your password !!");return false;

			}

			else

			return true;

			}

			

		</script>

		<noscript>Your Javascript is off !! </noscript>



</head>



<body bgcolor="#333333" text="#FFFFFF" marginwidth="45">

<?php

include("connect.php");

if(!isset($_POST['submit']))

{

 echo '<body bgcolor="#333333" text="#FFFFFF" marginwidth="45"> <br><center><b><font face="calibri" color="red"
                 size=8>Three-</font><font face="calibri" size ="8">Level Password Authentication System</font></b></center>

<hr color="#CC0000">';

  

           		echo'<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                
    <p align="right">
<font size="5">Login</strong><br></font>

        </h2>

<form name="login" action="index.php" method="post" onSubmit="return validate();" >

<p align="right">

Username : <input type ="text" name="name"><br>

Password : <input type="password" name="password"><br>

<input type="submit" value="Login" name="submit">

<p align="right"

  class="forgot"><a href="forgot.php">Forgot Password?</a></p>

</form>

<p align="right">

If you are not registered then register <i><a href="signup.php"><font color="white">here</font></a></i><br></p><br><br><br><br><br><br><br><br><br><br><br><br>

<footer><br><br><br><i><p align="right">refer for more <a href="https://www.phpcable.com" target="_black"><font color="white">info</font></a> </a></i></footer>';



}

		else

		{

			session_start();

			$name=$_POST['name'];

			//$name=mysql_real_escape_string($name);

			$password1=$_POST['password'];

            $password=md5($password1);
			//$password=mysql_real_escape_string($password);

				if($name=='admin' && $password==999)

				{

				$_SESSION['uname']=$name;header("Location: http://localhost/phpmyadmin/index.php");return;exit;

				}

			$query="select * from user where username='$name' and password='$password'" ;

			//echo $query;

			$result=mysqli_query($con,$query);

			if($result)

			{

				$rows=mysqli_num_rows($result);

				if($rows>0)

				{ 

					

					$row=mysqli_fetch_array($result);

					//if($row[5]==1)

					$_SESSION['uname']=$name;

					//header('Location:account.php');

					header('Location:layer1_login.php');

					

				}

				else

				{	

				$query="select * from user where username='$name' and password='$password'" ;

				$result=mysqli_query($con,$query);

				$row=mysqli_fetch_array($result);

				$rows=mysqli_num_rows($result);

				if($rows==0)

				echo'<br><center><b><font face="calibri" color="red" size=8>Three-</font><font face="calibri" size ="8">Level Password Authentication System</font></b></center>

				<hr color="#CC0000"><center>No such user exists in our database !<br>Maybe you entered something wrong !<br><a href="login.php"><font color="white">Click here to go back</a><br><br><br>

<footer><br><br><br><i><p align="right">refer for more <a href="https://www.phpcable.com" target="_black"><font color="white">info</font></a> </a></i></footer>';



				}

			}

			//else echo '<center>Either you are not registered OR you are not confirmed by admin OR the hunt has not started yet!<br><a href="login.php"><font color="white">Click here to go back</a>';

		}

?>

</body>

</html>
