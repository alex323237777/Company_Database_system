<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $emp_num = $_POST['emp_num']; //assigns value for the primary key//

        $sql = "DELETE FROM Employee WHERE Emp_Num = $emp_num"; //finds primary key to delete that specific record//

        $result = $db->exec($sql);

        if ($result) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $db->lastErrorMsg();
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_employees.php"); //returned to view page after deletion//
        exit();
    }
}
?>