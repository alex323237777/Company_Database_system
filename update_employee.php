<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $emp_num = $_POST['emp_num']; //assigning values for each of the rows of the table//
        $emp_fname = $_POST['emp_fname'];
        $emp_mname = $_POST['emp_mname'];
        $emp_lname = $_POST['emp_lname'];
        $job_id = $_POST['job_id'];

        $sql = "UPDATE Employee SET EMP_FNAME='$emp_fname', EMP_MNAME='$emp_mname', EMP_LNAME='$emp_lname', Job_ID='$job_id' WHERE Emp_Num=$emp_num";
//updating record with Databse values linked to their assigned code values//
        $result = $db->exec($sql);

        if ($result) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $db->lastErrorMsg(); //messages for success or failure//
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_employees.php"); //returns user to view page after completion//
        exit();
    }
}
?>