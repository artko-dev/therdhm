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
	<title>Halifax Canoe and Kayak PC not working</title>
</head>

<body>
	<!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
		<div class="main_php">
			<div class="eror_form">
				<h1>So your computer is not working?</h1>
				<br>
				<p>We sincerely regret your loss.</p>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	<!--footer-->
	<?php include('phpblocks/footer.php'); ?>
	<!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>