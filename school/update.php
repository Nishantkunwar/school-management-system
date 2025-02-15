<?php
include "connect.php";
$id = $_GET['updateid'];
$sql = "select * from `std` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$address=$row['address'];

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["add"];
    $mobile = $_POST["mobile"];

    $sql="UPDATE `std` set id=$id,name='$name',email='$email',mobile='$mobile',address='$address' where id = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:display.php");
    }
    else{
        echo "failed";
    }
}
?>

<!doctype html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
   
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Enter your name: </label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" value=<?php echo $name;
                ?>>
            </div>
            <div class="mb-3">
                <label>Enter your email: </label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" value=<?php echo $email;
                ?>>
            </div>
            <div class="mb-3">
                <label>Enter your Address: </label>
                <input type="text" class="form-control" name="add" placeholder="Enter your address" value=<?php echo $password;
                ?>>
            </div>
            <div class="mb-3">
                <label>Enter your mobile number:</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile" value=<?php echo $mobile;
                ?>>
            </div>


                <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>