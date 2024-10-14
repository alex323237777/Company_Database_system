<?php
$db = new SQLite3('DataRedo.db'); //connects to database//

$sql = "SELECT Assignment_ID, Hours, Project_ID, Emp_Num FROM Assignment";
// Selects all values from the table in the database //
$result = $db->query($sql);

if ($result) {

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["Assignment_ID"] . "</td>"; //table generated for all rows of the table// 
        echo "<td>" . $row["Hours"] . "</td>";
        echo "<td>" . $row["Project_ID"] . "</td>";
        echo "<td>" . $row["Emp_Num"] . "</td>";
        echo "<td><a href='update_assignments_confirmation.php?id=" . $row["Assignment_ID"] . "'>Update</a></td>";
        echo "<td><a href='delete_assignments_confirmation.php?id=" . $row["Assignment_ID"] . "'>Delete</a></td>";
        // links to update and delete pages alongside their labels for the table//
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No assignments found</td></tr>";
}
$db->close();
?>