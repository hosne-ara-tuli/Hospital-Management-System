



<?php include "connection.php"; ?>



<?php 


$link = '<a href = "reception.php" name="read"> Print Here </a> ';
if(isset($_POST['submit'])){

$adate = $_POST['adate'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$paddress = $_POST['paddress'];
$profession = $_POST['profession'];
$amount = $_POST['amount'];
$sig = $_POST['sig'];


$adate = mysqli_escape_string($connection,$adate);
$fname = mysqli_escape_string($connection,$fname);
$lname = mysqli_escape_string($connection,$lname);
$bdate = mysqli_escape_string($connection,$bdate);
$mobile = mysqli_escape_string($connection,$mobile);
$address = mysqli_escape_string($connection,$address);
$paddress = mysqli_escape_string($connection,$paddress);
$profession = mysqli_escape_string($connection,$profession);
$amount = mysqli_escape_string($connection,$amount);
$sig = mysqli_escape_string($connection,$sig);


$query = "  INSERT INTO patient_admission (adate,fname,lname,bdate,mobile,address, paddress,profession,amount, sig) VALUES ('$adate', '$fname', '$lname', '$bdate', '$mobile', '$address', '$paddress','$profession' ,'$amount', '$sig')  ";


$result = mysqli_query($connection, $query);

if($result){
  echo "submit success!";
  echo $link;

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
  <title>Patient Admission</title>
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
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Patient Admission Form</h3>
<form class="needs-validation" method="post" action="">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Date of Admission</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="adate" required>
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
      <label for="validationTooltip01">Mobile no</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Mobile no"  name="mobile"required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Present Address</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Present Address" name="address" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Permanent Address</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Permanent Address" name="paddress" required>
    </div>

  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Profession</label>
    <select class="form-control" id="exampleFormControlSelect1" name="profession">
      <option>Government job</option>
      <option>Private Job</option>
      <option>Business</option>
      <option>Farmer</option>
      <option>Retired </option>
    </select>
  </div>


 
  
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Amount Deposited</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Amount Deposited" name="amount" required>
    </div>
     <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Signature with date</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Signature with date" name="sig" required>
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