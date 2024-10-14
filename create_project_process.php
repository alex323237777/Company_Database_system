<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if (!$db) {
    die("Failed to connect to the database.");//message if connection fails//
}


if ($_SERVER["REQUEST_METHOD"] == "POST") { //assigns code values to all items in the creation process//
    
    $name = $_POST["project_num"];
    $number = $_POST["project_name"];
    
    $id = ""; //assigns empty value to assignment id as new ones are being generated//
    $last_id_query = $db->query("SELECT MAX(Project_ID) as max_id FROM Project"); //selects the most recent(maximum) id from the appointment table//
    $last_id_row = $last_id_query->fetchArray(SQLITE3_ASSOC);
    if ($last_id_row) {
        $last_id = $last_id_row["max_id"]; //adds one to the max id to create a new appointment id//
        $id = $last_id + 1; //this process continues for each future entry in the table//
    } else {
        $id = 1; 
    }

    $insert_query = $db->prepare("INSERT INTO Project (Project_ID, Proj_Num, Proj_Name) VALUES (:project_id, :project_num, :project_name)");
    $insert_query->bindValue(':project_id', $id); //line of code above assigns values from the database to the ones I have created in the code//
    $insert_query->bindValue(':project_num', $name);
    $insert_query->bindValue(':project_name', $number);
    $insert_query->execute();

    
    header("Location: index.html"); //Once appointment is created, user is sent back to the dashboard//
    exit();
}
?>