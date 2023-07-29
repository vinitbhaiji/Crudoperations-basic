<?php
    include 'connect.php';

    if(isset($_GET['id'])){
        $ID=$_GET['id'];

        $sql="DELETE FROM `crud-data` WHERE ID=$ID";
        
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:operation.php');
        }else{
            echo "failed to delete";
        }

    }
    ?>