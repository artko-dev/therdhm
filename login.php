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
	<title>Halifax Canoe and Kayak Admin login</title>
</head>

<body>
	<!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
	<div class="main_php">
		<div class="login_form">
			<form action="users.php" method="post">
				<h3>welcome to your it support system</h3>
					<input type="text" name="first_name" required placeholder="First Name">
					<input type="text" name="last_name" required placeholder="Last Name">
					<label for="role"></label>
					<select name="role" id="role">
					<option value="admin">Admin</option>
					<option value="manager">Manager</option>
					<option value="ceo">CEO</option>
					<option value="user">User</option>
					</select>
					<input type="submit" name="submit" value="submit" class="form-btn">
					<a href="logout.php">Logout</a>
				</form>
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