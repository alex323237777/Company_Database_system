<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $proj_id = $_POST['proj_id']; //assigning values for each of the rows of the table//
        $proj_num = $_POST['proj_num'];
        $proj_name = $_POST['proj_name'];
//updating record with Databse values linked to their assigned code values//
        $sql = "UPDATE Project SET Proj_Num='$proj_num', Proj_Name='$proj_name' WHERE Project_ID=$proj_id";

        $result = $db->exec($sql);

        if ($result) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $db->lastErrorMsg(); //messages for success or failure//
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_projects.php"); //returns user to view page after completion//
        exit();
    }
}
?>