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

        $subject = $_POST["subject"];
        $author = $_POST["author"];
        $content = $_POST["content"];

        $sql = "INSERT INTO content (subject, author, content) VALUES ('$subject', '$author', '$content')";
        try {
            $dsn = 'mysql:host=localhost;dbname=notehub';
            $userName = 'root';
            $password = 'password';

            $pdo = new PDO($dsn, $userName, $password);

            // Set PDO to throw an exception on error
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->exec($sql);

            if ($stmt !== false) {
                echo "Content added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $pdo->errorInfo()[2];
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    ?>
    <button onclick="window.location.href='index.php'">Go Back</button>
</body>

</html>