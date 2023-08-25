<?php
   include 'db/db.php';

   if(isset($_POST['submit'])){
     
     
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $address = $_POST['address'];

  $sql = "INSERT INTO `data`   VALUES ('', '$name', '$email', '$password', '$address')";
  $data = mysqli_query($conn, $sql);


  if ($data) {
    header('location:index.php');
    }
    else{
    echo "not Insert";
     }
   }

   if ($_POST['update'])
    {
    $id=$_REQUEST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
 	$sql="UPDATE `data` SET `name`='$name', `email`='$email' , `password`='$password', `address`='$address'   WHERE  id='".$id."'";
 	$data=mysqli_query($conn, $sql);
 
 
    if ($data) {
 		header('location:index.php');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
   
    $id=$_REQUEST['did'];
    $query = "DELETE FROM data WHERE id=$id"; 
    $result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
    header("Location: index.php"); 
    exit();
?>