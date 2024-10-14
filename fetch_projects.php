<?php
$db = new SQLite3('DataRedo.db'); //connects to database//
// Selects all values from the table in the database //
$sql = "SELECT Project_ID, Proj_Num, Proj_Name FROM Project";

$result = $db->query($sql);

if ($result) {

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["Project_ID"] . "</td>"; //table generated for all rows of the table// 
        echo "<td>" . $row["Proj_Num"] . "</td>";
        echo "<td>" . $row["Proj_Name"] . "</td>";
        echo "<td><a href='update_projects_confirmation.php?id=" . $row["Project_ID"] . "'>Update</a></td>";
        echo "<td><a href='delete_projects_confirmation.php?id=" . $row["Project_ID"] . "'>Delete</a></td>";
        echo "</tr>"; // links to update and delete pages alongside their labels for the table//
    }
} else {
    echo "<tr><td colspan='6'>No projects found</td></tr>";
}
$db->close();
?>