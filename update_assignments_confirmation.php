<?php

$db = new SQLite3('DataRedo.db');

if (isset($_GET['id'])) {

    $assignment_id = $_GET['id'];

    $sql = "SELECT * FROM Assignment WHERE Assignment_ID = $assignment_id";

    $result = $db->querySingle($sql, true);

    if ($result) {

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Confirmation</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        <div class="container">
  <div class="title-box">
    <h1>Update Confirmation</h1>
  </div>
  <p>Fill in the boxes to Update this Record:</p>
            <form action="update_assignment.php" method="POST">
                <input type="hidden" name="assignment_id" value="<?php echo $result['Assignment_ID']; ?>">
                <label for="hours">Hours:</label>
                <input type="text" name="hours" value="<?php echo $result['Hours']; ?>"><br>
                <label for="project_id">Project ID:</label>
                <input type="text" name="project_id" value="<?php echo $result['Project_ID']; ?>"><br>
                <label for="emp_num">Employee Number:</label>
                <input type="text" name="emp_num" value="<?php echo $result['Emp_Num']; ?>"><br>
                <input type="submit" name="confirm" value="Confirm">
                <input type="submit" name="cancel" value="Cancel">
            </form>
        </div>
        </body>
        </html>
        <?php
    } else {
        echo "Record not found.";
    }
} else {
    echo "Assignment ID not provided.";
}
?>