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

  <?php
  $comment=$_POST['comment'];
  $query2="select * from $comment WHERE text !=''";
  $result2 = mysqli_query($conn, $query2);
  while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) { 
  while ($row = $result2->fetch_assoc()) {
    echo $row['text'].'<br>'; 
    echo $row['full'].'<br>';
  }
 }
  ?>

  
</body>
</html>