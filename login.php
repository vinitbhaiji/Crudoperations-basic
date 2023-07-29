<?php
$login=0;
$invalid=0;

if($_SERVER["REQUEST_METHOD"]== "POST"){ 
    include 'connect.php'; 
    // $name=$_POST['name'];
    $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    // $cp=$_POST['cp'];

    $sql="SELECT * FROM `crud-data` WHERE email='$email' and password='$password'";

    $result= mysqli_query($conn,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header ('location:logout.php');
        }else{
            $invalid=1; 
        }
        }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../crud-basic/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="import" href="connect.php">
</head>
<body>

<?php
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> You have <strong> Successfully </strong> registered yourself <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
?>

<?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong> Wrong Credentials </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
?>
    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <div class="cardbody"> 
                    <form METHOD="post" action="logout.php">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Your email" required autocomplete="off">

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter Password" required autocomplete="off">
                    <Button class="btn btn-warning" name="Register" style="margin:20px 0px; align-self:center;"> Log In </Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>