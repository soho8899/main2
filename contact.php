
<?php
if (!$_POST['test']) {
		$error = "You must agree to the terms and conditions.";
	} else {
	$to_email = "sphs8899@gmail.com";
	$subject = "Contact Message";
	$headers .= "From: Contact@webscreative.com.au\r\n";
	$contactus = "
	You have a message from the contact us page on your website:
							
	Name:		".$_POST['firstname']." ".$_POST['lastname']."
	Address:	".$_POST['streetaddress']."
			".$_POST['city']." ".$_POST['state']." ".$_POST['postalcode']."
			".$_POST['country']."
	Phone:	".$_POST['phone']."
	Email:	".$_POST['emailaddress']."
	Message:	".$_POST['Message']."
	READTERMS:   ".$_POST['test'];
	@mail($to_email,$subject,$contactus,$headers) ;
	header("Location: thankyou.html");
}
?> 	