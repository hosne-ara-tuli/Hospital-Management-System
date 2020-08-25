<?php include "connection.php"; ?>



<?php 


if(isset($_POST['submit'])){

$Height = $_POST['Height'];
$Weight = $_POST['Weight'];
$Symptoms = $_POST['Symptoms'];
$Bpressure = $_POST['Bpressure'];
$Fhabit = $_POST['Fhabit'];
$Hobby = $_POST['Hobby'];
$Disease = $_POST['Disease'];
$sig = $_POST['sig'];
$Did = $_POST['Did'];
$Designation = $_POST['Designation'];


$Height = mysqli_escape_string($connection,$Height);
$Weight = mysqli_escape_string($connection,$Weight);
$Symptoms = mysqli_escape_string($connection,$Symptoms);
$Bpressure = mysqli_escape_string($connection,$Bpressure);
$Fhabit = mysqli_escape_string($connection,$Fhabit);
$Hobby = mysqli_escape_string($connection,$Hobby);
$Disease = mysqli_escape_string($connection,$Disease);
$sig = mysqli_escape_string($connection,$sig);
$Did = mysqli_escape_string($connection,$Did);
$Designation = mysqli_escape_string($connection,$Designation);


$query = "  INSERT INTO inverstigation (Height,Weight,Symptoms,Bpressure,Fhabit,Hobby,Disease, sig,Did, Designation) VALUES ('$Height', '$Weight', '$Symptoms', '$Bpressure', '$Fhabit','$Hobby' ,'$Disease', '$sig','$Did', '$Designation')  ";


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
  <link rel="shortcut icon" href="assets/images/mbr-favicon.png" type="image/x-icon">
  <meta name="description" content="Website Maker Description">
  <title>Patient Initial Investigation</title>
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
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Patient Initial Investigation Form</h3>
<form class="needs-validation" method="post" action="">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Height</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Height" name="Height" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Weight</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Weight" name="Weight" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Symptoms of the disease</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Symptoms" name="Symptoms" required>
    </div>
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Blood Pressure</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Blood Pressure" name="Bpressure" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">General Food Habit</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Food Habit"  name="Fhabit"required>
    </div>
   
  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Hobby</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Hobby">
      <option>Foot ball</option>
      <option>Hokey</option>
      <option>Cricket</option>
      <option>Writing</option>
      <option>Others</option>
    </select>
  </div>

  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Disease Name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Disease Name" name="Disease" required>
    </div>
     <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Signature with date</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Signature with date" name="sig" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Doctor Id</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Doctor Id" name="Did" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Designation</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Designation"  name="Designation"required>
    </div>
<div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="submit" value="submit" class="btn btn-primary">
</div>

</form>
</div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>