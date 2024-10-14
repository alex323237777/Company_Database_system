<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $dep_id = $_POST['dep_id']; //assigning values for each of the rows of the table//
        $job_class = $_POST['job_class'];
        $chg_hour = $_POST['chg_hour'];
//updating record with Databse values linked to their assigned code values//
        $sql = "UPDATE Department SET Job_Class='$job_class', CHG_Hour='$chg_hour' WHERE Department_ID=$dep_id";

        $result = $db->exec($sql);

        if ($result) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $db->lastErrorMsg(); //messages for success or failure//
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_jobs.php"); //returns user to view page after completion//
        exit();
    }
}
?>