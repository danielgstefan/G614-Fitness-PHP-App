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
            <a class="nav-link active" aria-current="page" href="displayantrenamente.php">Antrenamente</a>
        
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="displayexercitii.php">Exercitii</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="displayprogres.php">Progres</a>
        </li>
       
        <table class="table">
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nume Echipament</th>
      <th scope="col">Greutate in KG</th>
    </tr>
  </thead>
  <tbody>

<?php


$sql = "SELECT
e.IDechipament,
e.numeechipament,
e.greutate,
ex.IDexercitii
FROM
`echipament` e
INNER JOIN exercitii ex ON
ex.IDexercitii = e.IDexercitii
";
$result = mysqli_query($con, $sql);
if($result){
    
    while($row = mysqli_fetch_assoc($result)){
        $IDechipament=$row['IDechipament'];
        $numeechipament = $row["numeechipament"];
        $greutate = $row["greutate"];
     
        echo '<tr>
        <th scope="row">'.$IDechipament.'</th>
        <td>'.$numeechipament.'</td>
        <td>'.$greutate.'</td>
        
      
      </tr>';
    }
}


?>


   
  </tbody>
</table>


</div>

    </body>
</html>