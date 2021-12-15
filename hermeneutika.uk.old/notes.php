<!DOCTYPE html>

<html>
<head>
<title>search</title>
<?php include ("link.php") ?>

</head>
<body>

<div id="first">
<?php
// attempt at multiquery 20/10/20 note the dot and the double colons!
//testing authentication via ssh 24/11/20 1400
// still testing git
$query1="select michael.text,bible.text from bible,michael where michael.text <> ' ' ";
$query2="select michael.text from michael  where michael.text <> ' '"; 
$result1 = mysqli_query($link, $query1);
$result2= mysqli_query($link,$query2);
if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  // still playing around with this 22/11/20
  while($row = mysqli_fetch_assoc($result2))   {
    echo  $row["text"]. "<br>";
	//echo $row;
  }
} else {
  echo "0 results";
}

mysqli_close($link);


?>




</div>



</body>
</html>
