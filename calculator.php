<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Cannot divide by zero.</p>";
                    exit();
                }
                break;
            default:
                echo "<p>Invalid operation.</p>";
                exit();
        }

        echo "<p>$num1 $operation $num2 = $result</p>";
    } else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
    <br><br>
    <a href="index.html">Go Back</a>
</body>
</html>
