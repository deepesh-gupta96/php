<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<div class="container">
		<div class="header">
			
			<h2>Log In</h2>
		</div>

		<forma action= "registration.php" method = "post">

			<div>
				
				<label for="username">Username</label>
				<input type="text" name="username" required>

			</div>

			
			<div>
				
				<label for="password">Password</label>
				<input type="password" name="password" required>

			</div>

			
			<button type="submit" name="login_user">Login</button>

			<p>Not a user? <a href="registration.php">Register here</a></p>



		</form>


	</div>


</body>
</html>