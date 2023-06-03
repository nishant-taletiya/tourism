<?php
	// Authorisation details.
	$username = "rajputneeraj996@gmail.com";
	$hash = "579797235bf8b7d540a91d33302b86fd9ef2fb0957953cfb2499276067fb7b14";
	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "91".$mobile; // A single number or a comma-seperated list of numbers
	$message = "Your OTP Code is ".$otp." Do Not Share With Anyone";
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
?>
<!--
<img src="http://txtguru.in/imobile/api.php?username=itsquareinfotech&password=Superstud21&source=UPDATE&dmobile=91<?php // echo $mobile; ?>&message=<?php // echo $otp ?>." alt="">


<script type="text/javascript">
setTimeout("window.location='<?php // echo site_url() ?>'",1000);
</script>
?>