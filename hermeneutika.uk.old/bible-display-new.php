<!DOCTYPE html>

<html>
<head>
<title>Bible-display</title>
<?php include ("link.php") ?>
</head>
<body>
<div class=bible">
<?php
$book=$_POST['book'];
$chapt=$_POST['chapt'];
$verse=$_POST['verse'];
echo $book;
echo $chapt;
echo $verse;

//$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
//$result = mysqli_query($link, $query);
//$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//$book=$row["n"];
echo "Book is " .$book. " Chapter is ".$chapt. " verse is ".$verse;
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo $row["text"];

?>
</div>






</body>
</html>
