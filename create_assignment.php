<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Assignments</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>Create Assignments</h1>
  </div>
  <p>Fill in the boxes to create a new Assignment Record:</p>
        <form action="create_assignment_process.php" method="post">
            <div class="form-group">
                <label for="hours">Hours:</label>
                <input type="text" id="hours" name="hours" required>
            </div>
            <div class="form-group">
                <label for="project_id">Project ID:</label>
                <input type="text" id="project_id" name="project_id" required>
            </div>
            <div class="form-group">
                <label for="employee_num">Employee Number:</label>
                <input type="text" id="employee_num" name="employee_num" required>
            </div>
            <button type="submit" class="submit-button">Create Assignment</button>
        </form>
        </div>
</body>
</html>
