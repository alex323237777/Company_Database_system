<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignments</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>View Assignments</h1>
  </div>
  <p>List of Current Company Assignments:</p>
    <table>
        <tr>
            <th>Assignment ID</th>
            <th>Hours</th>
            <th>Project Number</th>
            <th>Employee Number</th>
            <th>Actions</th>
        </tr>
        <?php include 'fetch_assignments.php'; ?>
    </table>
</div>
</body>
</html>