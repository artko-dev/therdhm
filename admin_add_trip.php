<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halifax Canoe and Kayak</title>
   <!--Connect to CSS-->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
   <!-- Add main content -->

   <div class="account_form add_book">
			<form action="admin_confirm_trip.php" method="post">
				<h3>Add new trip</h3>
               <input type="text" name="heading" required placeholder="Heading"><br>
					<input type="date" name="trip_date" required placeholder="Trip-date"><br>
					<input type="text" name="duration" required placeholder="Duration"><br>
               <textarea name="summary" id="textar" cols="84" rows="20" required placeholder="Description about new tour"></textarea><br>		
					<input type="submit" class="form-btn">
					
   </div>
   <!-- Add footer -->
   <?php include('phpblocks/footer.php'); ?>
   <!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>