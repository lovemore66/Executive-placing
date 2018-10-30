<?php
if (isset($_post['submit'])) {
	
	$name=$_post[name];
	$email=$_post[email];
	$phone=$_post[phone];
	$message=$_post[message];


	$mailto='lovemore@lomeditechies.co.za';
	$subject='Email received from: '.$email;
	$text='Email message :'.$message;




	mail($mailto, $subject, $text);
	
	header(Location:index.php?Emailsent);
}