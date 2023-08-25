<?php 
   include_once('db/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script src="css/js/bootstrap.min.js"></script>
    </head>
<body>

<div class="container">
     <div class="row">
          <div class="col-md-6">      
          
              <form action="action.php" id="login" name="login" method="post" enctype="multipart/form-data" class="box"> 
                <h1>Login</h1> 
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <button type="button" class="btn submit">Submit</button>
                <button type="button" class="btn singup"><a href="#">Sing Up</a></button>                     
             </form> 
     </div>    
     </div>
</div>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</body>
</html>

<?php
                                  if(isset($_SESSION['msglogineorror']))
                            { 
                                echo "<div class='alert alert-danger'>".$_SESSION['msglogineorror']."</div>"; 
                                unset($_SESSION['msglogineorror']); 
                              }  
                                  if(isset($_SESSION['singup']))
                            { 
                                echo "<div class='alert alert-success'>".$_SESSION['singup']."</div>"; 
                                unset($_SESSION['singup']); 
                              }
                          ?>