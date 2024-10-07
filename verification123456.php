<html>
<head>
<title>OTP SMS Mobile Verification in PHP </title>

</head>

<body bgcolor="#333333" text="#FFFFFF" marginwidth="45"> <br><center><b><font face="calibri" color="red"
                 size=8>Three-</font><font face="calibri" size ="8">Level Password Authentication System</font></b></center> <a href="logout.php"><font color="white">Quit</font></a><hr color="#CC0000">
       <br> <br>
			    <?php
		    if(isset($_POST['sendotp'])) {
    	require('textlocal.class.php');
     require('credit.php');
   	$textlocal = new textlocal(false, false, API_KEY);
   // $textlocal=new textlocal('nagarajap2015@gmail.com','T8bgndDUhXE-p3PblITuvgiJJQHAuS4qpGPx0XQVmg');
     
     
    	$numbers = array(MOBILE);
    	$sender = 'TXTLCL'; 
    	$otp = mt_rand(10000, 99999);
    	$message = "Hello". $_POST['uname'] . "This is your OTP" . $otp;
try {
$result = $textlocal->sendSms($numbers, $message, $sender);

		setcookie('otp',$otp);    	
    	echo "OTP successfully send...";
		
} catch(Exception $e)
{ die('Error:' . $e->getMessage());}} 

		
		  if(isset($_POST['verifyotp'])) {
		  	$otp = $_POST['otp'];
if($_COOKIE['otp'] == $otp)
{
echo "Congratulation your mobile is verified" ;
header('Location:index4.php');
}	  	
else { echo "Please enter current otp";
}}
		  	?>
			</form>
			<form method="post" action="">
		<center>&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OTP&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text"  id="otp" name="otp"
	 placeholder="Enter your otp " maxlength="5" required=""/>&nbsp;&nbsp;

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<button type="submit" name="verifyotp"> verity </button></center>
			</form>
			<a href="" >
</body>
</html>
