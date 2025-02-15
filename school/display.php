<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        h1{
            text-align: center;

        }
        .container button{
            margin-left: 45%;
        }
    </style>
</head>

<body>
    <h1>Manage Students</h1>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD USER</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SN no.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Operations</th>
                <th scope="col">attendance</th>
            </tr>
        </thead>
        <?php
        $sql = "Select * from `std`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $address = $row['address'];
                echo ' <tr>
                <th scope = "row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $address . '</td>
                <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
         <td>
        Present: <input type="radio" onclick="toggleRadio(this)">
        Absent: <input type="radio" onclick="toggleRadio(this)">
        </td>
                </tr>';

            }
        }
        
        ?>
        
        </tbody>
    </table>
</body>
<script>
    function toggleRadio(radio) {
      if (radio.dataset.checked === "true") {
        radio.checked = false;
        radio.dataset.checked = "false";
      } else {
        radio.dataset.checked = "true";
      }
    }
  </script>

</html>
