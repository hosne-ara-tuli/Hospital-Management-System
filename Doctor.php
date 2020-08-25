<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-favicon.png" type="image/x-icon">
  <meta name="description" content="Web Maker Description">
  <title>Our Doctors</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<div class="container" style="margin-top:80px; text-align: center;"> 
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Our Doctors</h3>

  <?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'project'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
    FROM doctor';
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
  <style type="text/css">
    body {
      font-size: 15px;
      color: #006666;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #006666;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #006666;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
<body>
  <table class="data-table">
    <thead>
      <tr>
        <th>Doctor id</th>
        <th>First name</th>
        <th>Last Name</th>
        <th>Date of birth</th>
        <th>Date of Appointment</th>
        <th>Educational Qualification</th>
        <th>Degree</th>
        <th>Board</th>
        <th>Year</th>
        <th>Division</th>
        <th>Experience</th>
        <th>Membership</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_array($query))
    {
      echo '<tr>
          
          <td>'.$row['did'].'</td>
          <td>'.$row['fname'].'</td>
          <td>'.$row['lname'].'</td>
          <td>'.$row['bdate'].'</td>
          <td>'.$row['adate'].'</td>
          <td>'.$row['eq'].'</td>
          <td>'.$row['degree'].'</td>
          <td>'.$row['board'].'</td>
          <td>'.$row['year'].'</td>
          <td>'.$row['division'].'</td>
          <td>'.$row['experience'].'</td>
          <td>'.$row['mship'].'</td>
        </tr>';
    
    }?>
    </tbody>
  
  </table>



<br></br>

<?php include "connection.php"; ?>



<?php 

if(isset($_POST['submit'])){

$did = $_POST['did'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$adate = $_POST['adate'];
$eq = $_POST['eq'];
$degree = $_POST['degree'];
$board = $_POST['board'];
$year = $_POST['year'];
$division = $_POST['division'];
$experience = $_POST['experience'];
$mship = $_POST['mship'];


$did = mysqli_escape_string($connection,$did);
$fname = mysqli_escape_string($connection,$fname);
$lname = mysqli_escape_string($connection,$lname);
$bdate = mysqli_escape_string($connection,$bdate);
$adate = mysqli_escape_string($connection,$adate);
$eq = mysqli_escape_string($connection,$eq);
$degree = mysqli_escape_string($connection,$degree);
$board = mysqli_escape_string($connection,$board);
$year = mysqli_escape_string($connection,$year);
$division = mysqli_escape_string($connection,$division);
$experience = mysqli_escape_string($connection,$experience);
$mship = mysqli_escape_string($connection,$mship);


$query = "  INSERT INTO doctor (did,fname,lname,bdate,adate,eq, degree,board,year, division,experience,mship) VALUES ('$did', '$fname', '$lname', '$bdate', '$adate', '$eq', '$degree','$board' ,'$year', '$division','$experience', '$mship')  ";


$result = mysqli_query($connection, $query);

if($result){
  echo "submit success!";

}else{
  echo "something wrong!!!";
}



}



?>


  <div class="container" style="margin-top:80px;"> 
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Add New Doctor</h3>
<form class="needs-validation" method="post" action="">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Doctor id</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Doctor id" name="did" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" name="fname" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Last name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="last name" name="lname" required>
    </div>
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Date of birth</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="bdate" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Date of Appointment</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)"  name="adate" required>
    </div>
<div class="col-md-6 mb-3">
      <label for="validationTooltip01">Educational Qualifications</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder=""  name="eq" required>
    </div>
  <div class="form-group col-md-12">
    <label for="exampleFormControlSelect1">Degree</label>
    <select class="form-control" id="exampleFormControlSelect1" name="degree">
      <option>FCPS</option>
      <option>MBBS</option>
      <option>PHD</option>
    </select>
  </div>
<div class="col-md-6 mb-3">
      <label for="validationTooltip01">Board</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="board" required>
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Year</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder=""  name="year" required>
    </div>

 <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Division</label>
    <select class="form-control" id="exampleFormControlSelect1" name="division">
      <option>1st Division</option>
      <option>2nd Division</option>
      <option>3rd Division</option>
    </select>
  </div>

   <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Membership</label>
    <select class="form-control" id="exampleFormControlSelect1" name="mship">
      <option>BMA</option>
      <option>British Medical Society</option>
      <option>American Medical Society</option>
    </select>
  </div>

 <div class="col-md-12 mb-3">
      <label for="validationTooltip01">Experience</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="experience" required>
    </div>
   
   
<div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="submit" value="submit" class="btn btn-primary">
</div>


</form>
</div>
</body>
</html>


</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>