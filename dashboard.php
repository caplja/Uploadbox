<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Upload - User site</title>
<link rel="stylesheet" href="css/style.css" />
<style>
body { 
    background-color: white ; 
}
</style>
</head>
<body>
<div class="form">
<p>Upload</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
<br /><br /><br /><br />

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>

</div>
</body>
</html>
