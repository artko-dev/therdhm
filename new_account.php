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
	<title>Halifax Canoe and Kayak create account</title>
</head>

<body>
	<!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
	<div class="main_php">
		<div class="account_form">
			<form action="send_email.php" method="post">
				<h3>Create new account</h3>
				<input type="text" name="name" required placeholder="enter your first name">
				<input type="text" name="lname" required placeholder="enter your last name">
				<input type="hidden" name="emailType" value="newAccount">
				<input type="email" name="email" required placeholder="enter your email">
				<input type="password" name="password" required placeholder="enter your password">
				<input type="password" name="cpassword" required placeholder="confirm your password">
				<select name="user_type">
					<option value="admin">admin</option>
					<option value="manager">manager</option>
					<option value="ceo">CEO</option>
					<option value="user">user</option>
				</select>
				<input type="submit" name="submit" value="create new account" class="form-btn">
				<p>Do you have an account?<a href="login.php"> Login</a></p>
			</form>
			<br>
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