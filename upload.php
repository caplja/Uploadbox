<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Upload</title>
<link rel="stylesheet" href="css/style.css" />
<style>
body { 
    background-color: white ;
}
</style>
</head>
<body>

<?php
$banana = $_SESSION["username"];
$target_dir = "uploads/$banana/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, file is too big.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "<br>";
    echo "We are sorry, there was an error with uploading file.";
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File ". basename( $_FILES["fileToUpload"]["name"]). " was successfully uploaded.";
    } else {
        echo "We are sorry, there was an error with uploading file.";
    }
}
?>
<p>Return to,<a href="dashboard.php">dashboard!</a></p>
</body>
</html>