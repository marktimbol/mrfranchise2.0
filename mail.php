<?php
$to = "hello@glocalguys.com";
$subject = "Mr. Franchise Inquiry";

$message = "
<html>
	<head>
		<title>Mr. Franchise Inquiry</title>
	</head>
	<body>
		<h3>Inquiry from the website</h3>

		<p><strong>Name:</strong><br />
			".$_POST['name']."
		</p>
		<p><strong>Email:</strong><br />
			".$_POST['email']."
		</p>
		<p><strong>Phone:</strong><br />
			".$_POST['phone']."
		</p>
			<p><strong>Interested in Market:</strong><br />
			".$_POST['country']."
		</p>					
	</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$_POST['email'].'>' . "\r\n";

mail($to, $subject, $message, $headers);

header('Location: thankyou.php');

die();
?>