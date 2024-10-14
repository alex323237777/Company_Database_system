<?php

$db = new SQLite3('DataRedo.db');

if (isset($_GET['id'])) {

    $emp_num = $_GET['id'];

    $sql = "SELECT * FROM Employee WHERE Emp_Num = $emp_num";

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
            <form action="update_employee.php" method="POST">
                <input type="hidden" name="emp_num" value="<?php echo $result['Emp_Num']; ?>">
                <label for="emp_fname">First Name:</label>
                <input type="text" name="emp_fname" value="<?php echo $result['EMP_FNAME']; ?>"><br>
                <label for="emp_mname">Middle Name:</label>
                <input type="text" name="emp_mname" value="<?php echo $result['EMP_MNAME']; ?>"><br>
                <label for="emp_lname">Last Name:</label>
                <input type="text" name="emp_lname" value="<?php echo $result['EMP_LNAME']; ?>"><br>
                <label for="job_id">Job ID:</label>
                <input type="text" name="job_id" value="<?php echo $result['Job_ID']; ?>"><br>
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
    echo "Employee Number not provided.";
}
?>