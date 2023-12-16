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
    try {

        $dsn = 'mysql:host=localhost;dbname=notehub';
        $userName = 'root';
        $password = 'password';

        $pdo = new PDO($dsn, $userName, $password);

        // Set PDO to throw an exception on error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($stmt !== false) {
            echo "Content added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $pdo->errorInfo()[2];
        }

        $stmt = $pdo->query("SELECT * FROM content");

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<p><strong>Subject:</strong> " . $row["subject"] . "<br><strong>Author:</strong> " . $row["author"] . "<br><strong>Content:</strong> " . $row["content"] . "</p>";
            }
        } else {
            echo "No content available.";
        }
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    } finally {
        // Close the PDO connection
        $pdo = null;
    }
    ?>

    ?>
    <br>
    <button onclick="window.location.href='index.php'">Go Back</button>
</body>

</html>