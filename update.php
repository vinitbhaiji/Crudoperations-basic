<?php 
include 'connect.php';
$ID = $id = $name = $email = $mobile = '';
$ID=$_GET['id'];
$sql = "select * from `crud-data` where ID='$ID'";
$result = mysqli_query($conn, $sql);

if ($result){

    $row = mysqli_fetch_array($result);
    $id = $row["ID"];
    $name = $row["name"];
    $email = $row["email"];
    $mobile = $row["mobile"];    
}

mysqli_close($conn);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../crud-basic/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="import" href="connect.php">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <div class="cardbody"> 
                    <form METHOD="post" action="updatescript.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" required autocomplete="off">

                    <label for="mobile">Mobile</label>
                    <input type="number" name="mobile" value="<?php echo $mobile; ?>" required autocomplete="off">

                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" required autocomplete="off">

                    <!-- <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter Password" required autocomplete="off">
                    
                    <label for="cp"> Confirm Password</label>
                    <input type="password" name="cp" placeholder="Confirm Password" required autocomplete="off">  -->

                    <Button class="btn btn-warning" name="Register" style="margin:20px 0px; align-self:center;"> Update </Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>