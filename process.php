<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteHub-Process Success</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "password", "notehub");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $subject = $_POST["subject"];
    $author = $_POST["author"];
    $content = $_POST["content"];

    $sql = "INSERT INTO content (subject, author, content) VALUES ('$subject', '$author', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "Content added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
    <button onclick="window.location.href='index.html'">Go Back</button>
</body>
</html>