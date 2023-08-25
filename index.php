<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class=container>
            <div class="record">
            <a href="singup.php"><button type="button" class="btn btn-primary">New Registration</button></a>
            </div>
    <?php
    include ('db/db.php');
    $sql ="select * from data";
    $data =mysqli_query($conn,$sql);
    $total=mysqli_num_rows($data);

        if ($total=mysqli_num_rows($data)) {
            ?>
        <table class="table table-hover">
        <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
        <?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
                    <tbody>
                        <tr>
                            <td>".$result['id']."</td>
                            <td>".$result['name']."</td>
                            <td>".$result['email']."</td>
                            <td>".$result['password']."</td>
                            <td>".$result['address']."</td>
                            <td>
                                <a href='update.php?uid=$result[id] '><button type='button' class='btn btn-success'>Update</button></a>
                            </td>
                            <td>
                                <a href='prosses.php?did=$result[id] '><button type='button' class='btn btn-danger'>Delete</button></a>
                            </td>
                        </tr>
                    </tbody>
                    ";
	            }
            }
        else
        {
            echo "no record found";
        }
        ?>
        </table>
</div>
        <script src="" async defer></script>
    </body>
</html>
