<?php
$servername='localhost';
$username='root';
$password='';
$dbname="courier";
$conn=mysqli_connect($servername,$username,$password,"$dbname"); 
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
?>
<?php
$sql = "SELECT * FROM details ";
$result = mysqli_query($conn, $sql);
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  while($row = mysqli_fetch_assoc($result)) {
    <tr>
   <td><?php echo $row["item"]; ?></td> 
   <td><?php echo $row["weight"]; ?></td> 
   <td><?php echo $row["pickup"]; ?></td> 
   <td><?php echo $row["dropa"]; ?></td> 
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>