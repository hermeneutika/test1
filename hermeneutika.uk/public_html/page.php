

<?php
session_start();
echo "printr ".print_r($_SESSION);
$bb = $_SESSION['bible'];
$comment=$_SESSION['comment'];
echo "session var comment".$comment;
echo "variable bb=".$bb;
echo "mytextarea from the post".$_POST['myTextarea'];
$mytextarea=$_POST['myTextarea'];
echo "mytextarea=".$mytextarea;
#echo  $_POST['$bb'];
 include ("conn.php"); 
 #include ("menu1.php"); 
 echo "print before the sql"; 
 $sql1="select text from michael where full =$bb";
$result = $conn->query($sql1);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
#if ($result->num_rows > 0) {
  // output data of each row
  #while($row = $result->fetch_assoc()) {
    echo "id: " . $row["text"] ;
    $var1=$row["text"];
    echo "variable var1 =".$var1;
  

$sql3="UPDATE michael SET text=CONCAT('$var1',' ','$mytextarea') where full=$bb";
if ($conn->query($sql3) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

#$sql="UPDATE michael SET text=CONCAT(?,?) WHERE FULL='1001001'";
#$stmt = $conn->prepare($sql);
#$stmt->bind_param("ss",$var1,$contents);
#$stmt->execute();

?>