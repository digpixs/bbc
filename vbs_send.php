<?php
$to = 'officeadmin@myberean.com , digdev.test@gmail.com';

if($_POST['website'] != '' || $_POST["child_name"] == ''){
    echo "<!-- SKIPPED -->";
}
else{

// subject
$subject = 'VBS Registration';

// message
$message = '<html><head><title>Berean</title></head>
<body>
<p>Child Name: ' . $_POST["child_name"] . '</p>
<p>Birthdate: ' . $_POST["birthdate"] . '</p>
<p>Age: ' . $_POST["age"] . '</p>
<p>Last Grade Completed: ' . $_POST["grade"] . '</p>
<p>Gender: ' . $_POST["gender"] . '</p>
<p>Medical Allergies: ' . $_POST["allergies"] . '</p>
<p>Emergency Contact: ' . $_POST["emecontact"] . '</p>
<p>Parent Names: ' . $_POST["parent_name"] . '</p>
<p>Email: ' . $_POST["email"] . '</p>
<p>Phone: ' . $_POST["phone"] . '</p>
<p>Address: ' . $_POST["address"] . '</p>
<p>Home Church: ' . $_POST["home_church"] . '</p>
<p>Guest of: ' . $_POST["guest"] . '</p>
<p>Child Pickup: ' . $_POST["pickup"] . '</p>
<p>Photo Permission: ' . $_POST["photo"] . '</p>
<p>Promotion Use: ' . $_POST["promo"] . '</p>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: VBS Registration <digpixs@gmail.com>' . "\r\n";
$headers .= 'From: VBS Registration <digpixs@gmail.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
    
 // Subject of confirmation email.
$conf_subject = 'VBS Registration';

// Who should the confirmation email be from?
$conf_sender = 'VBS Registration <digpixs@gmail.com>';

    $msg = $_POST['parent_name'] . "\n\nThank you for registering " . $_POST['child_name'] . " for Journey Off The Map.  We received your registration and look forward to seeing you.\n\nDates:\nFriday, July 31st to Sunday, August 2nd\n\nTimes:\nFriday: 6:30 to 9:30pm\nSaturday: 10:15am to 4pm\nSunday: 10:30am to 2pm \n\n\nBerean Baptist Church\nEngaging Communities to Experience Christ";

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender ); 
}
?>

<? 
	$page_title = 'Thank You for Contacting Berean';
?>

<?php include '_header.php'; ?>

	<div class="info_area"  style="width:600px; padding:15px; background-color: #e8e8e8; height:100%;">
	<div class="row" id="content">
		<div><h1>Your child has been registered. We look forward to seeing at Journey Off The Map. You should receive an email with your registration information shortly Please Click <a href="index.php">HERE</a></h1></div>
	</div>
	</div>
		
<?php include '_footer.php'; ?>