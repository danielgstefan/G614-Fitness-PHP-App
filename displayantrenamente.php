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
<ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="display.php">Utilizatori</a>
            
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="displayexercitii.php">Exercitii</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="displayechipament.php">Echipament</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="displayprogres.php">Progres</a>
        </li>
       
        <table class="table">
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numele Utilizatorului</th>
      <th scope="col">Nume Antrenament</th>
      <th scope="col">Data</th>
      <th scope="col">Durata</th>
    </tr>
  </thead>
  <tbody>

<?php


$sql = "SELECT
a.IDantrenament,
a.numeantrenament,
a.data,
a.durata,
u.Name
FROM
`antrenamente` a
INNER JOIN utilizatori u ON
u.ID = a.IDutilizator";
$result = mysqli_query($con, $sql);
if($result){
    
    while($row = mysqli_fetch_assoc($result)){
        $IDantrenament=$row['IDantrenament'];
        $name = $row["Name"];
        $numeantrenament = $row["numeantrenament"];
        $data = $row["data"];
        $durata = $row["durata"];
        
        echo '<tr>
        <th scope="row">'.$IDantrenament.'</th>
        <td>'.$name.'</td>
        <td>'.$numeantrenament.'</td>
        <td>'.$data.'</td>
        <td>'.$durata.'</td>
        
      
      </tr>';
    }
}


?>


   
  </tbody>
</table>


</div>

    </body>
</html>


