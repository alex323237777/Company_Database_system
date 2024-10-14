<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Jobs</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>Create Jobs</h1>
  </div>
  <p>Fill in the boxes to create a new Job Record:</p>
        <form action="create_job_process.php" method="post">
            <div class="form-group">
                <label for="job_class">Job Name:</label>
                <input type="text" id="job_class" name="job_class" required>
            </div>
            <div class="form-group">
                <label for="chg_hour">Hourly Wage:</label>
                <input type="text" id="chg_hour" name="chg_hour" required>
            </div>
            <button type="submit" class="submit-button">Create Job</button>
        </form>
        </div>
</body>
</html>