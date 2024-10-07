<html>
<head>
<title>OTP SMS Mobile Verification in PHP </title>

</head>
<body>

			    <?php
		    if(isset($_POST['sendotp'])) {
    	require('Textlocal.class.php');
     
    	$Textlocal = new Textlocal(false, false, api);
     
    	$numbers = array(7760055392);
    	$se  nder = 'TXTLCL'; 
    	$otp = mt_rand(10000, 99999);
    	$message = "Hello". $_POST['uname'] . "This is your OTP" . $otp;
try {
$result = $Textlocal->sendSms($numbers, $message, $sender);

		setcookie('otp',$otp);    	
    	echo "OTP successfully send...";
} catch(Exception $e)
{ die('Error:' . $e->getMessage());}} 
    
		
		  if(isset($_POST['verifyotp'])) {
		  	$otp = $_POST['otp'];
if($_COOKIE['otp'] == $otp)
{
echo "Congratulation your mobile is verified";
}	  	
else { echo "Please enter current otp";
}}
		  	?>
		
		<form role="form" method="post" encrypt="multipart/form-data">
Name <input type="text" class="form-control" id="uname" name="uname" value="" maxlength="14"
placeholder="Enter your name" required=""/>		
		
	Mobile Number <input type="text" class="form-control" id="mobile" name="mobile" 
	value="" maxlength="10" placeholder="Enter your valid mobile number" required=""/>	

<button type="submit" name="sendotp" >Send OTP</button>			
			
			</form>
			<form method="post" action="">
			OTP 	<input type="text" class="form-control" id="otp" name="otp" 
	 placeholder="Enter your otp " maxlength="5" required=""/>	

			<button type="submit" name="verifyotp"> verity </button> 
			</form>
			
</body>
</html>