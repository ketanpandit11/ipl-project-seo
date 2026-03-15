<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>

<style>

body{
font-family: Arial, sans-serif;
background: linear-gradient(135deg,#6dd5ed,#2193b0);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
margin:0;
}

.login-box{
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 8px 20px rgba(0,0,0,0.2);
width:320px;
text-align:center;
}

h2{
margin-bottom:20px;
color:#333;
}

input[type="email"],
input[type="password"]{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

input[type="submit"]{
width:100%;
padding:10px;
background:#2193b0;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

input[type="submit"]:hover{
background:#17687d;
}

</style>

</head>
<body>

<div class="login-box">

<?php
include("db.php");

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users 
      WHERE email='$email' AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
echo "<p style='color:green;'>Login Successful</p>";
}
else
{
echo "<p style='color:red;'>Invalid Email or Password</p>";
}
}
?>

<form method="post">

<h2>Login</h2>

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<input type="submit" name="login" value="Login">

</form>

</div>

</body>
</html>