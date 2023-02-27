
<!--Create an HTML form that allows users to input their name and email address.
The form should have two fields: one for name and one for email.
Use appropriate HTML tags to structure the form.

Task 1: HTML Basics
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Project</title>
</head>
<body>
    <h1>Form Submission Project</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <!-- <label for="message">Message:</label>
        <textarea id="message" name="message" ></textarea><br><br> -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
