<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>update</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
<?php
    include ('db/db.php');
    $id=$_REQUEST['uid'];
    $sql ="select * from data WHERE id='".$id."'";
    $data =mysqli_query($conn,$sql);
    $total=mysqli_num_rows($data);

        if ($total=mysqli_num_rows($data)) {

            while ($result = mysqli_fetch_array($data)) { 
            
            ?>

<div class="container">
     <h2> update Data </h2>
     <form action="prosses.php" method="post">
     <div class="mb-3 mt-3 col-md-5">
        <label for="id">ID:</label>
        <input type="text" class="form-control" name="id" value="<?php echo $result['id']; ?>">
       </div>
       <div class="mb-3 mt-3 col-md-5">
        <label for="name">Full Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>">
       </div>
       <div class="mb-3 col-md-5">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>">
       </div>
       <div class="mb-3 mt-3 col-md-5">
        <label for="address">Address:</label>
        <input type="text" class="form-control" value="<?php echo $result['address']; ?>"  name="address">
       </div>
       <div class="mb-3 col-md-5">
        <label for="Password">Password:</label>
        <input type="text" class="form-control" name="password" value="<?php echo $result['password']; ?>">
       </div>
       <button type="submit" value="<?php echo $result['id']; ?>" name="update" class="btn btn-primary">Update</button>
       <a href="index.php"><button type="button" class="btn btn-secondary">cancel</button></a>
      </form>
   </div>

         <?php }  }  ?>
</body>
</html>