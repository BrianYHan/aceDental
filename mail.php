

<head>
  <title>Contact Ace</title>
  <link href="../stylesheets/styles.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  </head>
<body>
<?php include("header.php"); ?>
  <div class = "container mainBlock"> 
	<h1 class="page-header">Contact Submission</h1>
	<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$call = $_POST['call'];
		$advertising = $_POST['advertising'];
		$interest = $_POST['interest'];
		$message = $_POST['message'];
		$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n How they Found us: $advertising \n Reason for contact: $interest \n Message: $message";
		$recipient = "acedentallabs@gmail.COM";
		$subject = "Contact Form";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		echo "Thank You!" . " -" . "<a href='contact_us.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
	?>
</div><div class="nav navbar-fixed-bottom">
<?php include("footer.php"); ?>
</div>
</body>