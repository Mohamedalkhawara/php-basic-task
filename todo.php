<?php
session_start();



if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $_SESSION['tasks'][] = $task;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanceTrackerPHP - Task Manager</title>
</head>
<body>
<div>
        <h1>To-Do List</h1>
        <form action="todo.php" method="POST">
            <input type="text" name="task" placeholder="Enter task..." required>
            <button type="submit" name="submit">Add Task</button>
            
        </form>
        <ul>
        <?php 
       
        foreach($_SESSION['tasks'] as $_task){
            echo '<li>' . ($_task) ;
            
        }
       

        ?>
        </ul>
       
</body>
</html>
<?php 



?>