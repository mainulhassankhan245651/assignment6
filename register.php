<?php
// Validate form inputs
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['profile_picture'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_FILES['profile_picture'];

    // Check if email is in valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Save profile picture to server
    $upload_dir = "uploads/";
    $timestamp = time();
    $filename = $timestamp . "_" . $profile_picture['name'];
    $upload_file = $upload_dir . $filename;
    if (move_uploaded_file($profile_picture['tmp_name'], $upload_file)) {
        // Save user data to CSV file
        $user_data = array($name, $email, $filename);
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $user_data);
        fclose($fp);

        // Set cookie with user's name
        session_start();
        $_SESSION['name'] = $name;
        setcookie('name', $name, time() + (86400 * 30), "/"); // Cookie expires in 30 days

        header("Location: users.php");
        exit();
    } else {
        die("Error uploading file");
    }
} else {
    die("All fields are required");
}
