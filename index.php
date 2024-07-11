<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4, 5, 6,7 </title>
</head>
<body>
    <h1>Task 4, 5, 6,7 </h1>
    

    <?php
    $projectName = "Task 4, 5, 6,7 ";
    $scriptName = basename(__FILE__);

    $requestTime = date('Y-m-d H:i:s');

    $counterFile = 'counter.txt';

    if (!file_exists($counterFile)) {
        file_put_contents($counterFile, '0');
    }

    $counter = (int)file_get_contents($counterFile);
    $counter++;
    file_put_contents($counterFile, $counter);

    echo "<p>Project Name: $projectName</p>";
    echo "<p>Script Name: $scriptName</p>";
    echo "<p>Page Requested Time: $requestTime</p>";
    echo "<p>Number of visitors: $counter</p>";
    ?>
</body>
</html>
