
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
            <a class="nav-link active" aria-current="page" href="displayechipament.php">Echipament</a>
        </li>
       
        <table class="table">
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numele Utilizatorului</th>
      <th scope="col">Data</th>
      <th scope="col">Calorii</th>
    </tr>
  </thead>
  <tbody>

<?php


$sql = "SELECT
p.IDprogres,
p.data,
p.calorii,
u.Name
FROM
`progres` p
INNER JOIN utilizatori u ON
u.ID = p.IDutilizator";
$result = mysqli_query($con, $sql);
if($result){
    
    while($row = mysqli_fetch_assoc($result)){
        $IDprogres=$row['IDprogres'];
        $name = $row["Name"];
        $data = $row["data"];
        $calorii = $row["calorii"];
        
        
        echo '<tr>
        <th scope="row">'.$IDprogres.'</th>
        <td>'.$name.'</td>
        <td>'.$data.'</td>
        <td>'.$calorii.'</td>
        
      </tr>';
    }
}


?>


   
  </tbody>
</table>


</div>

    </body>
</html>
