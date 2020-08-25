<?php include "connection.php"; ?>



<?php 


if(isset($_POST['submit'])){

$dadvice = $_POST['dadvice'];
$time= $_POST['time'];
$Madvice = $_POST['Madvice'];
$sno = $_POST['sno'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$tday = $_POST['tday'];
$morn = $_POST['morn'];
$noon = $_POST['noon'];
$even = $_POST['even'];
$test = $_POST['test'];
$sig = $_POST['sig'];
$des = $_POST['des'];


$dadvice = mysqli_escape_string($connection,$dadvice);
$time = mysqli_escape_string($connection,$time);
$Madvice = mysqli_escape_string($connection,$Madvice);
$sno = mysqli_escape_string($connection,$sno);
$name = mysqli_escape_string($connection,$name);
$quantity = mysqli_escape_string($connection,$quantity);
$tday = mysqli_escape_string($connection,$tday);
$morn = mysqli_escape_string($connection,$morn);
$noon = mysqli_escape_string($connection,$noon);
$even = mysqli_escape_string($connection,$even);
$test = mysqli_escape_string($connection,$test);
$sig = mysqli_escape_string($connection,$sig);
$des = mysqli_escape_string($connection,$des);


$query = "  INSERT INTO treatment (dadvice,time,Madvice,sno,name,quantity, tday,morn,noon,even,test, sig,des) VALUES ('$dadvice', '$time', '$Madvice', '$sno', '$name', '$quantity', '$tday','$morn' ,'$noon','$even','$test', '$sig','$des')  ";


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
  <meta name="description" content="Web Generator Description">
  <title>Medical treatment by Specialist</title>
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
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Medical Advise by the Specialist</h3>
<form class="needs-validation" method="post" action="">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Date of advice</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="dadvice" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Time</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="HH:MM" name="time" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Medicine advice</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="Madvice" required>
    </div>
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Serial Number</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="SNO" name="sno" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Name of Medicine</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder=""  name="name"required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Quantity</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Quantity" name="quantity" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Times in a day</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="tday" required>
    </div>

  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Morning</label>
    <select class="form-control" id="exampleFormControlSelect1" name="morn">
      <option>Before Meal</option>
      <option>After Meal</option>
    </select>
  </div>
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Noon</label>
    <select class="form-control" id="exampleFormControlSelect1" name="noon">
      <option>Before Meal</option>
      <option>After Meal</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Evening</label>
    <select class="form-control" id="exampleFormControlSelect1" name="even">
      <option>Before Meal</option>
      <option>After Meal</option>
    </select>
  </div>

 
  
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Test Advice</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="test" required>
    </div>
     <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Signature with date</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Signature with date" name="sig" required>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationTooltip01">Designation</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="des" required>
    </div>
<div class="text-center" style="text-align: center;" >
 <input style="margin-top: 60px;" type="submit" name="submit" value="submit" class="btn btn-primary">
</div>


</form>
</div>

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>