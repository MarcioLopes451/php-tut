<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a task was submitted
    if (!empty($_POST['todo'])) {
        // Initialize the session array if it's not already set
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }
        // Add the new task to the session array
        $_SESSION['tasks'][] = $_POST['todo'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>

<body>
    <h1>Todo List</h1>
    <form action="" method="post">
        <input type="text" name="todo" required>
        <input type="submit" value="Add Task">
    </form>

    <div>
        <ul>
            <?php
            // Check if there are tasks in the session and display them
            if (isset($_SESSION['tasks']) && count($_SESSION['tasks']) > 0) {
                foreach ($_SESSION['tasks'] as $task) {
                    echo "<li>$task</li>";
                }
            }
            ?>
        </ul>
    </div>
</body>

</html>