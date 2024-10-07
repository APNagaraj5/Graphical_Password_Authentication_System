<html>
<head>
<title>OTP SMS Mobile Verification in PHP </title>

</head>
<body>  
   <?php
		    if(isset($_POST['sendotp'])) {
		    	$mobileno=$_POST['mno'];
$msg=$_POST['msg'];


	// Authorisation details.

    $username = "rocknet2017@gmail.com";
	$hash = "5cca4cef21656dd6b3d3fe78d8a6665071ddc0a3b85b86b112403895695bb2ea";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "1";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobileno"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
}
?>
<form method="post" action="">
Message <input type="text"  id="msg" name="msg" value=""
maxlength="50" placeholder="Enter your name" required=""/>		
		
	Mobile Number <input type="text"  id="mno" name="mno" 
	value="" maxlength="10" placeholder="Enter your valid mobile number" required=""/>	

<button type="submit" name="sendotp" >Send OTP</button>			
			
			
						</form>
						
						</body>
</html>

