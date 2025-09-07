<?php
$host="localhost";
$user="root";
$pass=null;
$database="store";
$connect="";
$username = $lastname = $password = $email = $mobile = $city = $country = "";
$connect=new mysqli($host,$user,$pass,$database);
$stmt=$connect->query("SELECT * FROM user LIMIT 1");
while($row = $stmt->fetch_assoc()){
$id=$row["id"];
$username = $row['username'];
$lastname = $row['lastname'];
$password = $row['password'];
$email = $row['email'];
$mobile = $row['mobile'];
$city = $row['city'];
$country = $row['country'];
}
if($stmt->fetch_assoc()){
header("location:profilepage.php?msg=your profile");
}
?>
<html>
<head>
<link rel="stylesheet" href="forgotform.css">
</head>
<body>
<div class="form">
<form action="forgot.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<label>Confirm Password</label>
<input type="password" name="password" value="<?php echo $password; ?>" required>
<br><br>
<button class="submit">Submit</button>
</form>
</div>
</body>
</html>
