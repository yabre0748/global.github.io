<?php

if(!$_POST) exit;


//recuperation des valeurs

$name     = $_POST['name'];
$email    = $_POST['email'];
$phone     = $_POST['phone'];
$comments = $_POST['comments'];

if(trim($name) == '') {
	echo '<div class="alert alert-error">You must enter your name.</div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="alert alert-error">Mail non valide.</div>';
	exit();
} 
 else if(trim($phone) == '') {
	echo '<div class="alert alert-error">Please fill all fields!</div>';
	exit();
}
else if(trim($comments) == '') {
	echo '<div class="alert alert-error">You must enter your comments</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "Info@yourdomain.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'Contact Form';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "You have been contacted by $name, their additional message is as follows." . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name via email, $email";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );


if(mail($address, $e_subject, $msg)) {

	// Email has sent successfully, echo a success page.

	echo "<div class='alert alert-success'>";
	echo "<h3>Email Sent Successfully.</h3>";
	echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
	echo "</div>";

} else {

	echo 'ERROR!';

}