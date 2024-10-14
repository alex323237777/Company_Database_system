<?php

$db = new SQLite3('DataRedo.db');

if (isset($_GET['id'])) {

    $dep_id = $_GET['id'];

    $sql = "SELECT * FROM Department WHERE Department_ID = $dep_id";

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
            <form action="update_jobs.php" method="POST">
                <input type="hidden" name="dep_id" value="<?php echo $result['Department_ID']; ?>">
                <label for="job_class">Job Name:</label>
                <input type="text" name="job_class" value="<?php echo $result['Job_Class']; ?>"><br>
                <label for="chg_hour">Hourly Wage:</label>
                <input type="text" name="chg_hour" value="<?php echo $result['CHG_Hour']; ?>"><br>
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
    echo "Department ID not provided.";
}
?>