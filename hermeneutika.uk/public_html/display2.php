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
<!--<?php print_r($_POST);?> -->
<?php
$book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
echo "book=".$book ."chapter=".$chapt. "verse=".$verse;
$sql = "select * from bible";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    echo $row['text'].'<br>'; 
}
?>

<h1>this is a test</h1>
</body>
</html>