
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
      <th scope="col">Employee name</th>
      <th scope="col">Employee id</th>
      <th scope="col">Designation
      </th>
      <th scope="col">DOB</th>
      <th scope="col">Phone number</th>
      <th scope="col">Administrator id</th>
      <th scope="col">Account number</th>
      <th scope="col">Delete</th>

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
  $ename = $_POST['Employee name'];
  $eid = $_POST['Employee id'];
  $designation = $_POST['Designation'];
  $dob = $_POST['DOB'];
  $phone_no = $_POST['Phone number'];
  $aid = $_POST['Administrator id'];
  $account_no = $_POST['Account Number'];


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
$sql = "INSERT INTO `employee` (`ename`, `eid`, `designation`, `dob`, `phone_no`,`aid`,`account_no`) VALUES ('$ename', '$eid ', '$designation', '$phone_no','$aid', '$account_no')";
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
      $sql = "SELECT * FROM `employee`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// echo $num;
if($num> 0){
  while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);

    echo '<tr><th scope="row">'. $row['ename'].'</th><td>'. $row['eid'] . '</td><td>'. $row['designation'] . '</td><td>'. $row['dob'] . '</td><td>'. $row['phone_no'] . '</td><td>'. $row['aid'] . '</td>><td>'. $row['account_no'] . '</td>
    <td> <button class="edit btn btn-sm btn-primary" id="'. $row['eid']. '>Edit</button> <button class="delete btn btn-sm btn-primary" id=d"'.$row['eid'].'>Delete</button>  </td></tr>';

}

$delete = false;
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `employee` WHERE `employee`.`eid` = $eid";
  $result = mysqli_query($conn, $sql);
}

}
    
?>
</div>
    
  </tbody>
</table>
</body>
<script>
console.log("Hello");
let deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud/index.php?delete=${eid}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
