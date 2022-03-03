<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Your Name Here</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/learn-style.css">
</head>
<body>
    <h1><?php echo $_SERVER['HTTP_HOST'];?></h1>
    <img src="img/img-avatar.png" /><h2>Your Name Here</h2>
    <p>[Return to: <a href='/'>Home</a> ] </p>
    <h2>MCC Spring 2022 - CSC114 Client-side Web Development</h2>
    <hr>

<!-- DO NOT TOUCH THIS PHP CODE BELOW -->
<?php
$dir = '../learn/';
if ($handle = opendir($dir)) {
  while(false !== ($file = readdir($handle))) 
    {if ($file != "." && $file != ".." && $file != "index.php")
    {if (is_dir("$dir/$file")) $folder_array[] = $file;
else
  $file_array[] = $file;}}closedir($handle);}
if ($file_array)
{sort ($file_array);foreach($file_array as $file)
{echo "<a href='$file'>$file</a><br/>";}}
?>
<!-- DO NOT TOUCH THIS PHOP CODE ABOVE -->
  
</body>
</html>