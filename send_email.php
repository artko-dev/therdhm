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
	<title>Halifax Canoe and Kayak Support</title>
</head>

<body>
	<!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
		<div class="main_php">
			<div class="sendemail">
				<div>
					<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$emailType = $_POST["emailType"];
						$email = $_POST["email"];

						if ($emailType == "newAccount") {
							echo "We send you a message to $email";
						} elseif ($emailType == "lostPassword") {
							echo "We send your new password to $email";
						}
					}
					?>
				</div>
				<br>
				<div class="sendemail_link">
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include('phpblocks/footer.php'); ?>
		<!-- JS Connect -->
   	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   	<script src="js/script.js"></script>
	</div>
</body>

</html>