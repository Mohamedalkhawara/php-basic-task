<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Page</title>
</head>
<body>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "<h2>Data received via POST method</h2>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        $email = $_GET['email'];
        $password = $_GET['password'];
        echo "<h2>Data received via GET method</h2>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
    } else {
        echo "<h2>No data received</h2>";
    }
    ?>
</body>
</html>
