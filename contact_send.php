<?php
$to = 'officeadmin@myberean.com , digdev.test@gmail.com';

if($_POST['website'] != '' || $_POST["name"] == ''){
    echo "<!-- SKIPPED -->";
}
else{
    
// subject
$subject = 'Berean General Information';

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
$headers .= 'To: Berean <officeadmin@myberean.com>' . "\r\n";
$headers .= 'From: Berean <officeadmin@myberean.com>' . "\r\n";

// Mail it to site mail
mail($to, $subject, $message, $headers);
    
 // Subject of confirmation email.
$conf_subject = 'Berean General Infomation';

// Who should the confirmation email be from?
$conf_sender = 'Berean <officeadmin@myberean.com>';

$msg = $_POST['name'] . "\n\nThank you for contacting Berean, we are so glad you took the time to get in touch.  We look forward to answering your question as soon as possible.\n\n\nBerean Baptist Church\nEngaging Communities to Experience Christ";
    

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender ); 
}
?>

<? 
	$page_title = 'Thank You for Contacting Berean';
?>

<?php include '_header.php'; ?>

	<div class="info_area"  style="width:600px; padding:15px; background-color: #e8e8e8; height:100%;">
	<div class="row" id="content">
		<div><h1>Thank you for connecting with Berean. We will do our best to respond to you within 24-48 hours.</h1></div>
	</div>
	</div>
		
<?php include '_footer.php'; ?>