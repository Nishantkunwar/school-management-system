<?php
include("connect.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `std` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:display.php");

    }
    else{
        echo "failed to delete";
    }
}
?>