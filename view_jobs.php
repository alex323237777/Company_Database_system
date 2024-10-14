<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Jobs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>View Jobs</h1>
  </div>
  <p>List of Current Company Job Departments:</p>
    <table>
        <tr>
            <th>Department ID</th>
            <th>Job Name</th>
            <th>Hourly Wage</th>
        </tr>
        <?php include 'fetch_jobs.php'; ?>
    </table>
</div>
</body>
</html>