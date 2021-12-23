<?php
      include_once 'data.php';
      if(isset($_POST['submit']))
{
      $username= $_POST['username'];
      $password= $_POST['password'];

      $sql = "INSERT INTO deliveryinfo (username,password) VALUES ('$username','$password');";

      
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

      header("Location: ../index.php?signup=success");
   
}     
?> 