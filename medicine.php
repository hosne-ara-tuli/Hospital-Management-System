<!DOCTYPE html>
<html >
<head>
 
  <meta charset="UTF-8">
  <meta http-typeuiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-favicon.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>Medicines</title>
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
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Medicines</h3>

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
    FROM medicine';
    
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
      color: #343d44;
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
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #669999;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #669999;
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
        <th>Supplier Id </th>
        <th>Supplier name</th>
        <th>Date of Supply</th>
        <th>Medicine Id</th>
        <th>Name</th>
        <th>Type</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Date of Manufacture</th>
        <th>Expiry date</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_array($query))
    {
      echo '<tr>
          
          <td>'.$row['sid'].'</td>
          <td>'.$row['sname'].'</td>
          <td>'.$row['dsupply'].'</td>
          <td>'.$row['mid'].'</td>
          <td>'.$row['name'].'</td>
          <td>'.$row['type'].'</td>
          <td>'.$row['uprice'].'</td>
          <td>'.$row['quantity'].'</td>
          <td>'.$row['mdate'].'</td>
          <td>'.$row['exdate'].'</td>
          
          
        </tr>';
    
    }?>
    </tbody>
  
  </table>
<br></br>

<?php include "connection.php"; ?>



<?php 

if(isset($_POST['submit'])){

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$dsupply = $_POST['dsupply'];
$mid = $_POST['mid'];
$name = $_POST['name'];
$type = $_POST['type'];
$uprice = $_POST['uprice'];
$quantity = $_POST['quantity'];
$mdate = $_POST['mdate'];
$exdate = $_POST['exdate'];


$sid = mysqli_escape_string($connection,$sid);
$sname = mysqli_escape_string($connection,$sname);
$dsupply = mysqli_escape_string($connection,$dsupply);
$mid = mysqli_escape_string($connection,$mid);
$name = mysqli_escape_string($connection,$name);
$type = mysqli_escape_string($connection,$type);
$uprice = mysqli_escape_string($connection,$uprice);
$quantity = mysqli_escape_string($connection,$quantity);
$mdate = mysqli_escape_string($connection,$mdate);
$exdate = mysqli_escape_string($connection,$exdate);

$query = "  INSERT INTO medicine (sid,sname,dsupply,mid,name,type, uprice,quantity,mdate, exdate) VALUES ('$sid', '$sname', '$dsupply', '$mid', '$name', '$type', '$uprice','$quantity' ,'$mdate', '$exdate')  ";


$result = mysqli_query($connection, $query);

if($result){
  echo "submit success!";

}else{
  echo "something wrong!!!";
}



}



?>


  <div class="container" style="margin-top:80px;"> 
    <h3 style="text-align: center; margin-bottom: 60px; font-size:30px; color:#222222; font-weight:700;">Add New Medicine</h3>
<form class="needs-validation" method="post" action="">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Supplier Id</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Supplier Id " name="sid" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Supplier name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Supplier name" name="sname" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Date of Supply</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="dsupply" required>
    </div>
  <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Medicine Id</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Medicine Id" name="mid" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Supplier Name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Supplier Name"  name="name" required>
    </div>
<div class="col-md-6 mb-3">
      <label for="validationTooltip01">Type</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder=""  name="type" required>
    </div>
 <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Unit Price</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder=""  name="uprice" required>
    </div>
<div class="col-md-6 mb-3">
      <label for="validationTooltip01">Quantity</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" name="quantity" required>
    </div>

     <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Date of Manufacture</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="mdate" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Expiry date</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="(DD/MM/YYYY)" name="exdate" required>
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