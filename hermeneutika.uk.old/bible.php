<!DOCTYPE html>

<html>
<head>
<title>Bible</title>
<link href="menu1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<p>this is the bible page</p>
<?php include ("menu.php"); ?>
<form action="bible-display-new.php" method="post">
<p>Please enter the book,chapter and verse of the Holy Bible</p>
Book : <input type="text" name="book"><br>
Chapt: <input type="text" name="chapt"><br>
Verse: <input type="text" name="verse"><br>
<input type="submit">
</form>


</body>
</html>
