<?php
require_once 'connection.php';
if(isset($_POST['submit'])){
     $pname=$_POST['pname'];
     $pcategory=$_POST['pcategory'];
     $pprice=$_POST['pprice'];
     $imgupload=$_POST['imgupload'];
     $sql = "INSERT INTO product(pname,pcategory,pprice,imgupload) values ('$pname','$pcategory','$pprice','$imgupload')";
     $query= mysqli_query($con,$sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Products</title>
    <link rel="stylesheet" href="../static/upload.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body style="overflow-y:hidden;">
<nav class="navbar navbar-expand-lg bg-danger border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse justify-content-center" style="font-size:20px;" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="upload.php" style="margin-left:400px;">Upload</a>
        <a class="nav-link" href="order_data.php">&nbsp;&nbsp;&nbsp;Order</a>
        <a class="nav-link" href="subscription_data.php">&nbsp;&nbsp;&nbsp;Subscription</a>
        <a class="nav-link" href="contact_data.php">&nbsp;&nbsp;&nbsp;Contact</a>  
        <a class="nav-link" href="feedback_data.php">&nbsp;&nbsp;&nbsp;Feedback</a>
        <a class="nav-link" href="home.php" style="margin-left:300px;">&nbsp;&nbsp;&nbsp;Go to site</a>
      </div>
    </div>
  </div>
</nav>
<section style="margin-top:-70px;">
<form action="" method="POST">
    <h1 style="color:#fff;font-size: 36px; margin-left:35px;">Add a product</h1>
    <hr color="black" size="4">
    <input type="text" name="pname" id="pname" placeholder="Enter product name"> <br> <br>
    <label for="pcategory"> Select Category </label>
    <select name="pcategory" id="pcategory">
      <option value="E-Waste">E-Waste</option>
      <option value="Plastic">Plastic</option>
      <option value="Paper">Paper</option>
      <option value="Clothes">Clothes</option>
    </select><br> <br>
    <!-- <input type="text" name="pcategory" id="pcategory" placeholder="Enter product category"> <br> <br> -->
    <input type="text" name="pprice" id="pprice" placeholder="Enter product price"> <br> <br>
    <input type="file" name="imgupload" id="imgupload" ><br> <br>
    <!-- <button onclick="upload()">Select Image</button> <br> <br> -->
    <!-- <input type="submit" value="Upload" name="submit"> -->
    <input type="submit" name="submit" class="btn btn-success" value="Upload" style="width:100px;font-size:17px;margin-left:90px; margin-top:-10px;border-radius:5px;">
</form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>