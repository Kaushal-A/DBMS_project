
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Get and post!</title>
  </head>
  <body>
  <?php 
    include './Navbar/_nav.php';?>

<div class="container pt-3 mt-3">
<h1>Please Enter Admin Record</h1>
    <form action="./index.php" method="post">
    <div class="form-group">
        <label for="aid">Adim ID</label>
        <input type="text" name="aid" class="form-control" id="aid" >
    </div>
    <div class="form-group">
        <label for="Designation">Designation</label>
        <input type="text" name="Designation" class="form-control" id="Designation" >
    </div>
    <div class="form-group">
        <label for="Department">Department</label>
        <input type="text" name="Department" class="form-control" id="Department" >
    </div>
    <div class="form-group">
        <label for="nametag">Name</label>
        <input type="text" name="nametag" class="form-control" id="nametag" >
    </div>

    <div class="form-group ">
      <label for="BranchID">Branch ID</label>
      <select type id="BranchID" class="form-control" name="BranchID">
        <option selected></option>
        <option value='100001'>100001</option>
        <option value='100002'>100002</option>
        <option value='100003'>100003</option>
        <option value='155001'>155001</option>
        <option value='155002'>155002</option>
        <option value='155003'>155003</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary btn-dark">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

