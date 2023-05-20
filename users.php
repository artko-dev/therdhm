<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION["role"] = $_POST["role"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Connect to CSS-->
	<link rel="stylesheet" href="css/style.css">
	<title>Halifax Canoe and Kayak Choose</title>
</head>

<body>
	<!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
	<div class="main_php">
		<div class="choose_form">
			<h1>Hello, how we can help you? </h1>
			<?php
			if ($_SESSION["role"] == "admin") {
				echo '<a class="btn" href="new_account.php">New account</a><br>';
				echo '<a class="btn" href="not_working.php">PC not working</a><br>';
				echo '<a class="btn" href="admin_add_trip.php">Add a new trip</a><br>';
			} elseif ($_SESSION["role"] == "manager") {
				echo '<a class="btn" href="lost_password.php">Lost password</a><br>';
				echo '<a class="btn" href="not_working.php">PC not working</a><br>';
			} elseif ($_SESSION["role"] == "ceo") {
				echo '<a class="btn" href="phone.php">Contact US</a><br>';
				echo '<a class="btn" href="not_working.php">PC not working</a><br>';
			} else {
				echo "Invalid role.";
			}
			?>
			<br>
			<a class="btn" href="logout.php">Logout</a>
		</div>
	</div>
	<!--footer-->
	<?php include('phpblocks/footer.php'); ?>
	<!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>