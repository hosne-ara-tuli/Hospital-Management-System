



<?php include "connection.php"; ?>



<?php 


if(isset($_POST['submit'])){

$Patient_id = $_POST['Patient_id'];
$sid = $_POST['sid'];
$cdate = $_POST['cdate'];
$time = $_POST['time'];
$tc = $_POST['tc'];


$Patient_id = mysqli_escape_string($connection,$Patient_id);
$sid = mysqli_escape_string($connection,$sid);
$cdate = mysqli_escape_string($connection,$cdate);
$time = mysqli_escape_string($connection,$time);
$tc = mysqli_escape_string($connection,$tc);

$query = " INSERT INTO test (Patient_id, sid, cdate, time, tc) VALUES ('$Patient_id', '$sid', '$cdate', '$time','$tc') ";


$result = mysqli_query($connection, $query);

if($result){
  echo "submit success!";

}else{
  echo "something wrong!!!";
}



}



?>



<!DOCTYPE html>
<html >
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="Site Creator Description">
  <title>Medical Test</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <div class="container" style="margin-top:80px;"> 
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Medical Test</h3>
<form class="needs-validation" method="post" action="">
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationTooltip01">Patient id</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Patient id" name="Patient_id" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Sample Id</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Sample Id" name="sid" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Collection Date</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="cdate" required>
    </div>
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Collection Time</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="HH:MM" name="time" required>
  </div>

  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Test Center</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tc">
      <option>Pathology</option>
      <option>Radiology</option>
      <option>Imaging</option>
    </select>
  </div>

<div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="submit" value="submit" class="btn btn-primary">
</div>


</form>
</div>





  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>