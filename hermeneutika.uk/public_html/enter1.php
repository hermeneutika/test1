<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php include ("menu1.php"); ?> 
  <p>data entry</p>
  <?php
$servername = "localhost";
$username = "michael";
$password = "A7ndromeda!1";
$dbname = "cv1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cv (one,two,three,four)
VALUES ('John', 'Doe', 'john@example.com', 'one')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT one, two, three FROM cv";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["one"]. " - Name: " . $row["two"]. " " . $row["three"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>



  
</body>
</html>