<!DOCTYPE html>
<html>
<body>

<?php 

$conn = mysqli_connect("localhost","root","","basket");
if($conn==false){
  die("error for this problem-->".mysqli_connect_error());
}
else{
  echo("connection successful");
}
$id = $_GET['id'];

$sql="SELECT * from teams where id='$id'";
  $result=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($result);
  
  mysqli_close($conn);
  ?>
  </body>
  
  </html>






// if($count > 0){
//   header("Location:login_register.php?msg");

// }
// else{
// $sql="INSERT INTO client values('$name', '$password')";

// if (mysqli_query($conn,$sql)==TRUE){
// header("location:login_register.php");
// }
// else{
//     mysqli_error($conn);
// }
// }

