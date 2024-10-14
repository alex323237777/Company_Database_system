<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $project_id = $_POST['project_id']; //assigns value for the primary key//

        $sql = "DELETE FROM Project WHERE Project_ID = $project_id"; //finds primary key to delete that specific record//

        $result = $db->exec($sql);

        if ($result) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $db->lastErrorMsg();
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_projects.php"); //returned to view page after deletion//
        exit();
    }
}
?>