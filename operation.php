<?php
include 'connect.php'; 
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../crud-basic/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="import" href="connect.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                        <tbody>
                        <?php
                        $sql="SELECT * FROM `crud-data`
                        ";
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $ID=$row['ID'];
                                $name=$row['name'];
                                $email=$row['email'];
                                $mobile=$row['mobile'];
                                $password=$row['password'];
                                echo '<tr>
                                <td>'.$ID.'</td>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$password.'</td>
                                <td>
                                <a href="update.php?id='.$ID.'" class="text-light btn btn-primary" style="text-decoration:None;"> Update</a>
                                <a href="delete.php?id='.$ID.'" class="text-light btn btn-danger btn_del" style="text-decoration:None; width:auto;" onclick="return (this);"> Delete</a>
                                </td>
                            </tr>';
                            }
                        }
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn-del').click(function(e){
            e.preventDefault();

        });
    });
</script>
</html>