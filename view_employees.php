<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee's</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>View Employees</h1>
  </div>
  <p>List of Current Company Employees:</p>
    <table>
        <tr>
            <th>Employee Number</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Job ID</th>
        </tr>
        <?php include 'fetch_employees.php'; ?>
    </table>
</div>
</body>
</html>