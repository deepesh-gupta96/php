<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<div class="container">
		<div class="header">
			
			<h2>Register</h2>
		</div>

		<forma action= "registration.php" method = "post">

			<div>
				
				<label for="username">Username</label>
				<input type="text" name="username" required>

			</div>

			<div>
				
				<label for="email">Email:</label>
				<input type="email" name="email" required>
			</div>

			<div>
				
				<label for="password">Password</label>
				<input type="password" name="password_1" required>

			</div>

			<div>
				
				<label for="password">Comfirm Password</label>
				<input type="password" name="password_2" required>

			</div>

			<button type="submit" name="register_user">Submit</button>

			<p>Already a user? <a href="login.php">Login</a></p>



		</form>


	</div>


</body>
</html>