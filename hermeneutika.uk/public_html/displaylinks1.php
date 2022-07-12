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
  $book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
$comment=$_POST['comment'];

$query="select * from $comment where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row= mysqli_fetch_array($result, MYSQLI_BOTH);
$linkamend=$row["text"];
$linklocate=$row["full"];
echo "linkamend= ".$linkamend;
echo "linkfull=".$linklocate;
# explode text
$count=0;
$x=0;
#print_r (explode(" ",$linkamend));

$test=explode(" ",$linkamend);
foreach ($test as $value)
{
  $count++;
  echo "$value <br>";
  $temp=$test[1];
  echo "temp = ".$temp;
  echo "count= ".$count;
  #so now we need the query
  $query="select * from bible where full=$temp";
  $result = mysqli_query($conn, $query);
  #echo mysqli_error();
$row= mysqli_fetch_array($result, MYSQLI_BOTH);
$linkamend=$row["text"];
$linklocate=$row["full"];
echo "linkamend= ".$linkamend;
echo "linkfull=".$linklocate;
}
?>
</body>
</html>