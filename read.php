<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Page</title>
</head>
<body>
    <h2>Read Content</h2>
    <?php
    // Fetch and display content from the database
    $conn = new mysqli("localhost", "root", "D2s5:B=1{Aw]", "notehub");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM content");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Subject:</strong> " . $row["subject"] . "<br><strong>Author:</strong> " . $row["author"] . "<br><strong>Content:</strong> " . $row["content"] . "</p>";
        }
    } else {
        echo "No content available.";
    }

    $conn->close();
    ?>
    <br>
    <button onclick="window.location.href='index.html'">Go Back</button>
</body>
</html>
