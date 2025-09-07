<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registration Form</title>
  <link rel="stylesheet" href="singup.css">
</head>
<body>

  <form action="database.php" method="POST" enctype="multipart/form-data">
    <h2>User Registration</h2>
    
    <label>Profile Image 1:</label>
    <input type="file" name="file1" accept="image/*" required>

    
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Lastname:</label>
    <input type="text" name="lastname" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Mobile:</label>
    <input type="text" name="mobile" required>

    <label>City:</label>
    <input type="text" name="city" required>

    <label>Country:</label>
    <input type="text" name="country" required>



    <input type="submit" value="Register">
  </form>

</body>
</html>
