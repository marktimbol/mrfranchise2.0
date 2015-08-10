<?php
$to = "mark@glocalguys.com";
$subject = "Mr. Franchise Inquiry";

$message = "
<html>
	<head>
		<title>Mr. Franchise Inquiry</title>
	</head>
	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Interested in Market</th>
			</tr>
			<tr>
				<td>".$_POST['name']."</td>
				<td>".$_POST['email']."</td>
				<td>".$_POST['phone']."</td>
				<td>".$_POST['country']."</td>
			</tr>
		</table>
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