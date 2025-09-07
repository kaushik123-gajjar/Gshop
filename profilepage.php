<html>
    <?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: singuppage.php");
        exit();
    }
    ?>
<?php
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$result = $connect->query("SELECT * FROM user");
echo "
<!DOCTYPE html>
<html>
<head>
<title>User List</title>
<link rel='stylesheet' href='profile.css'>
</head>
<body>
<h2>User Details</h2>
<table class='user-table'>
<tr>
<th>ID</th>
<th>Profile Picture1</th>
<th>Profile Picture2</th>
<th>Username</th>
<th>Lastname</th>
<th>Password</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>Country</th>
<th>Operations</th>
</tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>
<td>{$row['user_id']}</td>
<td><img src='image/" . htmlspecialchars($row['image1']) . "' width='100' height='100'></td>

<td>{$row['username']}</td>
<td>{$row['lastname']}</td>
<td>{$row['password']}</td>
<td>{$row['email']}</td>
<td>{$row['mobile']}</td>
<td>{$row['city']}</td>
<td>{$row['country']}</td>
<td>

</form>
<form action='showprofilepage.php' method='get' style='display:inline;'>
<input type='hidden' name='user_id' value='{$row['user_id']}'>
<input type='submit' value='Show' class='btn show'>
</form>
</td>
</tr>";
}
echo "</table>";

if (isset($_GET['msg'])) {
echo "<p class='msg'>" . htmlspecialchars($_GET['msg']) . "</p>";
}

echo "
</body>
</html>
";
