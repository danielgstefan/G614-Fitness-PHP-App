<?php
include 'connect.php';
$ID = $_GET['updateid'];
$sql = "Select * from `utilizatori` where id=$ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$email = $row['email'];
$password = $row['Password'];
$progress = $row['Progress'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $progress = $_POST['progress'];


    $sql = "update `utilizatori` set id=$ID, name='$name', email='$email', password='$password', progress='$progress'
    where id=$ID";
    $result = mysqli_query($con, $sql);
    if ($result) {
       
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>Fitness APP</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                placeholder="Enter your name" 
                name="name" autocomplete="off" value=<?php 
                 echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required value=<?php 
                 echo $email;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" required value=<?php 
                 echo $password;?>>
            </div>
            <div class="form-group">
                <label>Progress</label>
                <input type="text" class="form-control" placeholder="Describe your progress" name="progress" required value=<?php 
                 echo $progress;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">
                Update</button>
        </form>
    </div>

</body>

</html>