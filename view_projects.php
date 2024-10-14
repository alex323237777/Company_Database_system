<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Projects</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>View Projects</h1>
  </div>
  <p>List of Current Company Projects:</p>
    <table>
        <tr>
            <th>Project ID</th>
            <th>Project Number</th>
            <th>Project Name</th>
        </tr>
        <?php include 'fetch_projects.php'; ?>
    </table>
</div>
</body>
</html>