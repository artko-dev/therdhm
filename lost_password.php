<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Connect to CSS-->
	<link rel="stylesheet" href="css/style.css">
	<title>Halifax Canoe and Kayak Rest Password</title>
</head>

<body>
	<!--Header + nav-->	
   <?php include('phpblocks/header_and_nav.php'); ?>
		<div class="main_php">
			<div class="lost_pas">
				<h1>Forgot Your password?</h1>
				<p>Write your email</p>
				<form action="send_email.php" method="post">
					<input type="hidden" name="emailType" value="lostPassword">
					<input type="email" name="email" id="email" required placeholder="enter your email">
					<br>
					<input type="submit" id="btn" value="Submit">
				</form>
				<br>
				<div class="home-link">
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</div>
	<!--footer-->
	<?php include('phpblocks/footer.php'); ?>
	<!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>