<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $progress = $_POST['progress'];


    $sql = "insert into `utilizatori` (name,email,password,progress)
    values('$name','$email','$password','$progress')";
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <div class="form-group">
                <label>Progress</label>
                <input type="text" class="form-control" placeholder="Describe your progress" name="progress">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">
                Submit</button>
        </form>
    </div>

</body>

</html>