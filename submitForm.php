<?php 

$servername = "localhost";
$admname = "root";
$admpassword = "";
$dbname = "contacts";

$conn = new mysqli ($servername, $admname, $admpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
$text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);

$sql = "INSERT INTO customermessages (name, email, query, message) VALUES ('$name', '$email', '$type', '$text')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your message.";
}
else {
    echo "Error.";
}

exit();