<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Fitness App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    </head>
    <body>
<div class="container"> 
    <button class="btn btn-primary my-5"><a href="Utilizatori.php"
        class="text-light">Adauga utilizator</a>

        </button>
        <button class="btn btn-primary my-5"><a href="displayantrenamente.php"
        class="text-light">Vizualizare antrenamente</a>
        </button>
        <button class="btn btn-primary my-5"><a href="displayprogres.php"
        class="text-light">Vizualizare progres</a>
        </button>
        <button class="btn btn-primary my-5"><a href="displayexercitii.php"
        class="text-light">Vizualizare exercitii</a>
        </button>
        <button class="btn btn-primary my-5"><a href="displayechipament.php"
        class="text-light">Vizualizare echipament</a>
        </button>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Progress</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  
  <tbody>

<?php

$sql = "Select * from `utilizatori`";
$result = mysqli_query($con, $sql);
if($result){
    
    while($row = mysqli_fetch_assoc($result)){
        $ID = $row['ID'];
        $Name = $row["Name"];
        $email = $row["email"];
        $Password = $row["Password"];
        $Progress = $row["Progress"];
        echo '<tr>
        <th scope="row">'.$ID.'</th>
        <td>'.$Name.'</td>
        <td>'.$email.'</td>
        <td>'.$Password.'</td>
        <td>'.$Progress.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$ID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$ID.'" class="text-light">Delete</a></button>
       </td>
      </tr>';
    }
}



?>


   
  </tbody>
</table>


</div>

    </body>
</html>