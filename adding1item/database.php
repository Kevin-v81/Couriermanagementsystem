<?php
      include_once 'connect.php';
      if(isset($_POST['submit']))
     
{
      $item= $_POST['item'];
      $weight= $_POST['weight'];
      $pickup= $_POST['pickup'];
      $Dropa= $_POST['dropa'];
      $Phoneno= $_POST['phoneno'];

      $sql = "INSERT INTO details(item,weight,pickup,dropa,phoneno)
                VALUES ('$item','$weight','$pickup','$Dropa','$Phoneno')";
     mysqli_query($conn, $sql);
      
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

      header("Location: ../index.php?signup=success");
   
}     
?> 