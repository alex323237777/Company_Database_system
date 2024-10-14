<?php
$db = new SQLite3('DataRedo.db'); //connects to database//
// Selects all values from the table in the database //
$sql = "SELECT Department_ID, Job_Class, CHG_Hour FROM Department";

$result = $db->query($sql);

if ($result) {

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["Department_ID"] . "</td>"; //table generated for all rows of the table// 
        echo "<td>" . $row["Job_Class"] . "</td>";
        echo "<td>" . $row["CHG_Hour"] . "</td>";
        echo "<td><a href='update_jobs_confirmation.php?id=" . $row["Department_ID"] . "'>Update</a></td>";
        echo "<td><a href='delete_jobs_confirmation.php?id=" . $row["Department_ID"] . "'>Delete</a></td>";
        echo "</tr>"; // links to update and delete pages alongside their labels for the table//
    }
} else {
    echo "<tr><td colspan='6'>No Jobs found</td></tr>";
}
$db->close();
?>