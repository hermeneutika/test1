html>
<head>
<title>notes</title>
<?php include ("link.php") ?>
</head>
<body>

<?php 

$query="select * from michael;
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
echo " ";
echo "<br>";
echo $row["text"];

?>















</body>
</html>
