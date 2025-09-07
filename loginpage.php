<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userlistbutton.css">
</head>

</html>

<html>
<head>
<link rel="stylesheet" href="loginpage.css">
</head>
<body>
<div class="form">
<form action="login.php" method="post">
<label for="username">Username</label>
<input type="text" name=username id="username" required>
<br><br>
<label for="password">password</label>
<input type="text" name=password id="password" required>
<br><br>
<button class="login">Login</button>
</form>
<button class="singup"><a href="singuppage.php">Signup</a></button>
</div>

</body>
<script src="l.js"></script>
<?php
if(isset($_GET['msg'])){
    
echo "<p class='msg' id='msg'>".htmlspecialchars($_GET['msg'])."</p>";
}
?>
</html>