<?php

$db = new SQLite3('DataRedo.db');

if (isset($_GET['id'])) {

    $proj_id = $_GET['id'];

    $sql = "SELECT * FROM Project WHERE Project_ID = $proj_id";

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
            <form action="update_project.php" method="POST">
                <input type="hidden" name="proj_id" value="<?php echo $result['Project_ID']; ?>">
                <label for="proj_num">Project Number:</label>
                <input type="text" name="proj_num" value="<?php echo $result['Proj_Num']; ?>"><br>
                <label for="proj_name">Project Name:</label>
                <input type="text" name="proj_name" value="<?php echo $result['Proj_Name']; ?>"><br>
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
    echo "Project ID not provided.";
}
?>