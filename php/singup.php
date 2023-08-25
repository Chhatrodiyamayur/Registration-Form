<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
<body>
   <div class="container">
     <h2> Registration Form </h2>
     <form action="prosses.php" method="post">
       <div class="mb-3 mt-3 col-md-5">
        <label for="name">Full Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Fullname" require>
       </div>
       <div class="mb-3 col-md-5">
        <label for="Email">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Email" require>
       </div>
       <div class="mb-3 mt-3 col-md-5">
        <label for="address">Address:</label>
        <textarea class="form-control" rows="2" placeholder="Enter Address"  name="address" require></textarea>
       </div>
       <div class="mb-3 col-md-5">
        <label for="Password">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password" require>
       </div>
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       <a href="index.php"><button type="button" class="btn btn-secondary">cancel</button></a>
      </form>
   </div>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



</body>
</html>