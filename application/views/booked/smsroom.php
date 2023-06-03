<?php
	// Authorisation details.
	$username = "r.s7488143@gmail.com";
	$hash = "e9d7756429d7c06d2978478df2e323d26591fe7323071ae1a6efe1fb48b7a6ac";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "91".$mobile; // A single number or a comma-seperated list of numbers
	$message = $cname." Your Room Has Been Booked through Panaga";
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
	redirect('BookingController/roombook');
?>