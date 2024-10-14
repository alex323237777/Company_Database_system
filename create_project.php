<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project Record</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>Create Projects</h1>
  </div>
  <p>Fill in the boxes to create a new Project Record:</p>
        <form action="create_project_process.php" method="post">
            <div class="form-group">
                <label for="project_num">Project Number:</label>
                <input type="text" id="project_num" name="project_num" required>
            </div>
            <div class="form-group">
                <label for="project_name">Project Name:</label>
                <input type="text" id="project_name" name="project_name" required>
            </div>
            <button type="submit" class="submit-button">Create Project</button>
        </form>
        </div>
</body>
</html>