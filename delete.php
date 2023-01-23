<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $ID = $_GET['deleteid'];

    $sql = "delete from `utilizatori` where ID=$ID";
    $result = mysqli_query($con,$sql);
    if($result){
       
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>