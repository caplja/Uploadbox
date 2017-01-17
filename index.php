<?php
require("db.php");

include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
<link rel="stylesheet" href="css/style.css" />
<style>
body { 
    background-color: white	;
}
</style>
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
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is your user site.</p>
<p><a href="dashboard.php">Upload</a></p>
<a href="logout.php">Logout</a>
<br><br><br><br>

<?php
// open this directory 
$banana = $_SESSION['username'];
$myDirectory = opendir("uploads/$banana/");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);

// sort 'em
sort($dirArray);

// print 'em
print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<TR><TH>Filename</TH></TR>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		print("<TR><TD><p>$dirArray[$index]<p></td>");
}
}
print("</TABLE>\n");
?>

</div>
</body>
</html>
