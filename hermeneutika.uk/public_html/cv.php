<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The CV</title>
</head>
<body>


<br>
<?php
  include ("menu1.php");
// Store the file name into variable
$file = 'cv1.pdf';
$filename = 'cv1.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
  
?>
</body>
</html>