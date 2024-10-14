<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if (!$db) {
    die("Failed to connect to the database.");//message if connection fails//
}


if ($_SERVER["REQUEST_METHOD"] == "POST") { //assigns code values to all items in the creation process//
    
    $hours = $_POST["hours"];
    $project_id = $_POST["project_id"];
    $employee_num = $_POST["employee_num"];
    
    $assignment_id = ""; //assigns empty value to assignment id as new ones are being generated//
    $last_id_query = $db->query("SELECT MAX(Assignment_ID) as max_id FROM Assignment"); //selects the most recent(maximum) id from the appointment table//
    $last_id_row = $last_id_query->fetchArray(SQLITE3_ASSOC);
    if ($last_id_row) {
        $last_id = $last_id_row["max_id"]; //adds one to the max id to create a new appointment id//
        $assignment_id = $last_id + 1; //this process continues for each future entry in the table//
    } else {
        $assignment_id = 1; 
    }

    $insert_query = $db->prepare("INSERT INTO Assignment (Assignment_ID, Hours, Project_ID, Emp_Num) VALUES (:assignment_id, :hours, :project_id, :employee_num)");
    $insert_query->bindValue(':assignment_id', $assignment_id); //line of code above assigns values from the database to the ones I have created in the code//
    $insert_query->bindValue(':hours', $hours);
    $insert_query->bindValue(':project_id', $project_id);
    $insert_query->bindValue(':employee_num', $employee_num);
    $insert_query->execute();

    
    header("Location: index.html"); //Once appointment is created, user is sent back to the dashboard//
    exit();
}
?>
