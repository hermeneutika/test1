<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
</head>
<body>
<?php include ("conn.php"); ?>
  <?php include ("menu1.php"); ?> 
  <h1>Welcome to commentary search and display</h1>
<form action="showall1.php" method="post">
<label for="comment">Comment</label><br>
  <input type="text" id="comment" name="comment"><br>


  <input type="submit" value="Submit">

  
</body>
</html>