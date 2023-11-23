<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteHub</title>
</head>
<body>
    <h2>Write Content</h2>
    <form action="process.php" method="post">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>
        
        <label for="author">Author:</label>
        <input type="text" name="author" required><br>
        
        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
