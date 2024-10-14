<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $assignment_id = $_POST['assignment_id']; //assigning values for each of the rows of the table//
        $hours = $_POST['hours'];
        $project_id = $_POST['project_id'];
        $emp_num = $_POST['emp_num'];

        $sql = "UPDATE Assignment SET Hours='$hours', Project_ID='$project_id', Emp_Num='$emp_num' WHERE Assignment_ID=$assignment_id";
//updating record with Databse values linked to their assigned code values//
        $result = $db->exec($sql);

        if ($result) {
            echo "Record updated successfully."; //messages for success or failure//
        } else {
            echo "Error updating record: " . $db->lastErrorMsg();
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_assignments.php"); //returns user to view page after completion//
        exit();
    }
}
?>