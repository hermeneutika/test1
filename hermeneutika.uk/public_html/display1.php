<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bible search</title>
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
</head>
<body>
<?php include ("menu1.php"); ?> 
<h1>Welcome to Bible search and display</h1>
<form action="display2.php" method="post">
  <label for="book">Bible Book:</label><br>
  <input type="text" id="book" name="book"><br>
  <label for="chapt">chapter:</label><br>
  <input type="text" id="chapt" name="chapt"><br>
  <label for="verse">verse:</label><br>
  <input type="text" id="verse" name="verse"><br>


  <input type="submit" value="Submit">

  


</form> 
</body>
</html>