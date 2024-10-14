<a href="index.html" class="back-to-home-button">Back to Home</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee Record</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<div class="container">
  <div class="title-box">
    <h1>Create Employees</h1>
  </div>
  <p>Fill in the boxes to create a new Employee Record:</p>
        <form action="create_employee_process.php" method="post">
            <div class="form-group">
                <label for="emp_fname">First Name:</label>
                <input type="text" id="emp_fname" name="emp_fname" required>
            </div>
            <div class="form-group">
                <label for="emp_mname">Middle Name:</label>
                <input type="text" id="emp_mname" name="emp_mname">
            </div>
            <div class="form-group">
                <label for="emp_lname">Last Name:</label>
                <input type="text" id="emp_lname" name="emp_lname" required>
            </div>
            <div class="form-group">
                <label for="job_id">Job ID:</label>
                <input type="text" id="job_id" name="job_id" required>
            </div>
            <button type="submit" class="submit-button">Create Employee</button>
        </form>
        </div>
</body>
</html>