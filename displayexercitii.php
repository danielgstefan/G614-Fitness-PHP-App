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
            <a class="nav-link active" aria-current="page" href="displayechipament.php">Echipament</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="displayprogres.php">Progres</a>
        </li>
       
        <table class="table">
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Antrenamentul</th>
      <th scope="col">Grupa musculara lucrata</th>
      <th scope="col">Seturi</th>
      <th scope="col">Repetari</th>
    </tr>
  </thead>
  <tbody>

<?php


$sql = "SELECT
ex.IDexercitii,
ex.numeexercitii,
ex.grupamusculara,
ex.seturi,
ex.repetari,
a.IDantrenament
FROM
`exercitii` ex
INNER JOIN antrenamente a ON a.IDantrenament = ex.IDantrenament
";
$result = mysqli_query($con, $sql);
if($result){
    
    while($row = mysqli_fetch_assoc($result)){
        $IDexercitii=$row['IDexercitii'];
        $numeexercitii = $row["numeexercitii"];
        $grupamusculara = $row["grupamusculara"];
        $seturi = $row["seturi"];
        $repetari = $row["repetari"];
        
        echo '<tr>
        <th scope="row">'.$IDexercitii.'</th>
        <td>'.$numeexercitii.'</td>
        <td>'.$grupamusculara.'</td>
        <td>'.$seturi.'</td>
        <td>'.$repetari.'</td>
        
      
      </tr>';
    }
}


?>


   
  </tbody>
</table>


</div>

    </body>
</html>

