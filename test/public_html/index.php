<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php include ("conn.php"); ?> 

<?php 
$search="wisdom";
echo $search;
#$query="select * from "bible.text" where "text" LIKE "%wisdom%"";
#$query="select * from bible";
$query = "SELECT * FROM bible where bible.text LIKE '%$search%'";
$result = mysqli_query($conn, $query);
var_dump($result);
while ($row = mysqli_fetch_assoc($result))
{
  extract($row);
  
  echo "<br>";
  echo "<br>";
  #echo "$text";
  echo "text="."$text"."book="."$n"."verse="."$verse";
}
?>

  
</body>
</html>