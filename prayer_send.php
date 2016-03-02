<?php
$to = 'prayer@myberean.com , digdev.test@gmail.com';

if($_POST['website'] != '' || $_POST["comments"] == ''){
    echo "<!-- SKIPPED -->";
}
else{

// subject
$subject = 'Prayer Request';

// message
$message = '<html><head><title>Berean</title></head>
<body>
<p>Name: ' . $_POST["name"] . '</p>
<p>Email: ' . $_POST["email"] . '</p>
<p>Phone: ' . $_POST["phone"] . '</p>
<p>Question: ' . $_POST["comments"] . '</p>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: The Prayer Team <prayer@myberean.com>' . "\r\n";
$headers .= 'From: The Prayer Team <prayer@myberean.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
    
 // Subject of confirmation email.
$conf_subject = 'Your Prayer Request';

// Who should the confirmation email be from?
$conf_sender = 'The Prayer Team - Berean <prayer@myberean.com>';

$msg = $_POST['name'] . "\n\nThank you for sharing your prayer request. A member of our team will respond to your message as soon as possible.\n\n\nBerean Baptist Church\nEngaging Communities to Experience Christ";

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender ); 
}
?>

<? 
	$page_title = 'Thank You for Contacting Berean';
?>

<?php include '_header.php'; ?>

	<div class="info_area"  style="width:600px; padding:15px; background-color: #e8e8e8; height:100%;">
	<div class="row" id="content">
		<div><h1>Thank you for letting us pray for you.  If you left your email, someone should contact you within 72 hours. Please be assured that your prayer request will remain confidential and will not be shared with anyone outside of the prayer team.  Click <a href="index.php">HERE</a></h1></div>
	</div>
	</div>

<?php include '_footer.php'; ?>