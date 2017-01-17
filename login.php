<?php
require('db.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
body { 
    background-color: white	;
}
</style>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="holder">
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
</div>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Username or password are incorrect.</h3><br/>Click here <a href='login.php'>Prijava</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Login</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Submit" />
</form>
<p>Still not registered? Register now!  <a href='registration.php'>Register here !</a></p>

<?php } ?>


</body>
</html>
