<?php 
include 'connect.php';
$id = $name = $email = $mobile = '';
if(isset($_POST['Register'])){ 
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="update `crud-data` set name='$name',email='$email',mobile='$mobile' where ID='$id'";

    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "updated successfully";
        
    }
}
?>