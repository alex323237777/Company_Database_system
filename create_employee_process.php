<?php

$db = new SQLite3('DataRedo.db'); //connects to the database//

if (!$db) {
    die("Failed to connect to the database.");//message if connection fails//
}


if ($_SERVER["REQUEST_METHOD"] == "POST") { //assigns code values to all items in the creation process//
    
    $first = $_POST["emp_fname"];
    $middle = $_POST["emp_mname"];
    $last = $_POST["emp_lname"];
    $job_id = $_POST["job_id"];
    
    $emp_num = ""; //assigns empty value to assignment id as new ones are being generated//
    $last_id_query = $db->query("SELECT MAX(Emp_Num) as max_id FROM Employee"); //selects the most recent(maximum) id from the appointment table//
    $last_id_row = $last_id_query->fetchArray(SQLITE3_ASSOC);
    if ($last_id_row) {
        $last_id = $last_id_row["max_id"]; //adds one to the max id to create a new appointment id//
        $emp_num = $last_id + 1; //this process continues for each future entry in the table//
    } else {
        $emp_num = 1; 
    }

    $insert_query = $db->prepare("INSERT INTO Employee (Emp_Num, EMP_FNAME, EMP_MNAME, EMP_LNAME, Job_ID) VALUES (:emp_num, :emp_fname, :emp_mname, :emp_lname, :job_id)");
    $insert_query->bindValue(':emp_num', $emp_num); //line of code above assigns values from the database to the ones I have created in the code//
    $insert_query->bindValue(':emp_fname', $first);
    $insert_query->bindValue(':emp_mname', $middle);
    $insert_query->bindValue(':emp_lname', $last);
    $insert_query->bindValue(':job_id', $job_id);
    $insert_query->execute();

    
    header("Location: index.html"); //Once appointment is created, user is sent back to the dashboard//
    exit();
}
?>