<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Guestbook</title>
</head>
<body>
    <h1>Guest Book</h1>
    <form method="post">
        Name:<input type="text" name="name" required><br>
        Message: <br> <textarea name="message" required></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Messages</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $entry = "$name: $message\n";

        // Absolute path to the guestbook.txt file
        $filepath = $filepath = "/Applications/XAMPP/xamppfiles/htdocs/simple/guestbook.txt";
        
        

        // Attempt to write to the file
        if (file_put_contents($filepath, $entry, FILE_APPEND) === false) {
            echo "<p>Error: Could not write to the file.</p>";
        } else {
            echo "<p>Message saved successfully!</p>";
        }
    }

    // Display messages if the file exists
    if (file_exists($filepath)) {
        $entries = file($filepath, FILE_IGNORE_NEW_LINES);
        foreach ($entries as $entry) {
            echo "<p>" . htmlspecialchars($entry) . "</p>";
        }
    }
    ?>
</body>
</html>
