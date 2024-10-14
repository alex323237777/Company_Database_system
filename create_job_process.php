<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if (!$db) {
    die("Failed to connect to the database.");//message if connection fails//
}


if ($_SERVER["REQUEST_METHOD"] == "POST") { //assigns code values to all items in the creation process//
    
    $class = $_POST["job_class"];
    $chg = $_POST["chg_hour"];
    
    $dep_id = ""; //assigns empty value to assignment id as new ones are being generated//
    $last_id_query = $db->query("SELECT MAX(Department_ID) as max_id FROM Department"); //selects the most recent(maximum) id from the appointment table//
    $last_id_row = $last_id_query->fetchArray(SQLITE3_ASSOC);
    if ($last_id_row) {
        $last_id = $last_id_row["max_id"]; //adds one to the max id to create a new appointment id//
        $dep_id = $last_id + 1; //this process continues for each future entry in the table//
    } else {
        $dep_id = 1; 
    }

    $insert_query = $db->prepare("INSERT INTO Department (Department_ID, Job_Class, CHG_Hour) VALUES (:dep_id, :job_class, :chg_hour)");
    $insert_query->bindValue(':dep_id', $dep_id); //line of code above assigns values from the database to the ones I have created in the code//
    $insert_query->bindValue(':job_class', $class);
    $insert_query->bindValue(':chg_hour', $chg);
    $insert_query->execute();

    
    header("Location: index.html"); //Once appointment is created, user is sent back to the dashboard//
    exit();
}
?>