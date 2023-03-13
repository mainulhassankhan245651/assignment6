
<!--
Task 1: 
Create an HTML form with the following fields:
Name (text input)
Email (text input)
Password (password input)
Profile Picture (file input)
Submit Button
-->

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<form action="register.php" method="post" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>

		<label for="profile_picture">Profile Picture:</label>
		<input type="file" id="profile_picture" name="profile_picture" accept="image/*" required><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
