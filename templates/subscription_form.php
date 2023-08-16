<?php
require_once 'connection1.php';
if(isset($_POST['Click'])){
    $sname = $_POST['sname'];
    $semail = $_POST['semail'];
    $sstate = $_POST['sstate'];
    $stime = $_POST['stime'];

    $sql = "INSERT INTO subscription_form(sname,semail,sstate,stime) VALUES ('$sname','$semail','$sstate','$stime')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header("Location:home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup</title>
    <!-- Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/subscription_form.css">
</head>

<body>

    <form class="form" method="POST" action="">
        <p class="form-title">Schedule Pickup</p>
        <div class="input-container">
            <label for="name" >Name</label>
            <input id="name" type="text" placeholder="Enter your name" name="sname" required>
            <span>
            </span>
        </div>
        <div class="input-container">
            <label for="name">Email</label>
            <input id="email" type="email" placeholder="Enter your email" name="semail" required>
        </div>
        <div class="input-container">
            <label for="state">State</label>
            <select name="sstate" id="state" required>
                <option selected value="Maharashtra">Maharashtra</option>
                <option value="Mumbai">Mumbai</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
            </select>
        </div>
        <div class="input-container">
            <label for="time">Time</label>
            <input type="text" id="time" placeholder="12:00:PM" name="stime" required>
        </div> <br>
        <button type="submit" class="submit" name="Click">
            Submit
        </button>
    </form>

    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>