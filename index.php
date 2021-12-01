

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    include './Navbar/_nav.php';?>
    <div class="container mt-3 pt-3">
    <a class="btn btn-primary btn-lg btn-block" href="./insertdata.php" role="button">Insert new record</a>
    <table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Administrator ID</th>
      <th scope="col">Designation</th>
      <th scope="col">Department
      </th>
      <th scope="col">Name</th>
      <th scope="col">Branch Id</th>
    </tr>
  </thead>
  <tbody>
<?php
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "project";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $aid = $_POST['aid'];
  $name = $_POST['nametag'];
  $Designation = $_POST['Designation'];
  $Department = $_POST['Department'];
  $BranchID = $_POST['BranchID'];
    // echo $aid;
    // echo '<br>';
    // echo $name;
    // echo '<br>';
    // echo $Designation;
    // echo '<br>';
    // echo $Department;
    // echo '<br>';
    // echo $BranchID;
    // echo '<br>';
//   // Submit these to a database

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{ 
// echo "Connection was successful <br>";

}
$sql = "INSERT INTO `administrator` (`aid`, `designation`, `department`, `name`, `bid`) VALUES ('$aid', '$Designation ', '$Department', '$name', '$BranchID')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
// echo "The record has been inserted successfully successfully!<br>";
}
else{
echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

}

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // echo "Connection was successful <br>";
      }
      $sql = "SELECT * FROM `administrator`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// echo $num;
if($num> 0){
  while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);

    echo '<tr><th scope="row">'. $row['aid'].'</th><td>'. $row['designation'] . '</td><td>'. $row['department'] . '</td><td>'. $row['name'] . '</td><td>'. $row['bid'] . '</td></tr>';

}

}
    
?>
</div>
    
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
