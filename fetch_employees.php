<?php
$db = new SQLite3('DataRedo.db'); //connects to database//

$sql = "SELECT Emp_Num, EMP_FNAME, EMP_MNAME, EMP_LNAME, Job_ID FROM Employee";
// Selects all values from the table in the database //
$result = $db->query($sql);

if ($result) {

    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["Emp_Num"] . "</td>"; //table generated for all rows of the table// 
        echo "<td>" . $row["EMP_FNAME"] . "</td>";
        echo "<td>" . $row["EMP_MNAME"] . "</td>";
        echo "<td>" . $row["EMP_LNAME"] . "</td>";
        echo "<td>" . $row["Job_ID"] . "</td>";
        echo "<td><a href='update_employees_confirmation.php?id=" . $row["Emp_Num"] . "'>Update</a></td>";
        echo "<td><a href='delete_employees_confirmation.php?id=" . $row["Emp_Num"] . "'>Delete</a></td>";
        echo "</tr>"; // links to update and delete pages alongside their labels for the table//
    }
} else {
    echo "<tr><td colspan='6'>No employees found</td></tr>";
}
$db->close();
?>