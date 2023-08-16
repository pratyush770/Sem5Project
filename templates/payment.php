<?php
if(isset($_POST['Click_me']))
    {  
    $fname = $_POST['fname'];   
    $email2 = $_POST['email2'];
    $addr = $_POST['addr'];
    $ccity = $_POST['ccity'];
    $cstate = $_POST['cstate'];
    $zcode = $_POST['zcode'];

    $host = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'product_details';

    $conn = mysqli_connect($host,$username,$password,$dbname);

    $query = "INSERT INTO payment_details(fname,email2,addr,ccity,cstate,zcode) values ('$fname','$email2','$addr','$ccity','$cstate','$zcode')";
    $value=mysqli_query($conn,$query);
    if($value){
        header("Location:home.php");
    }
    mysqli_close($conn);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../static/payment.css">

</head>
<body>

<div class="container">

    <form action="" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter your name" name="fname" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Enter your email" name="email2" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Enter your address" name="addr" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Enter your city" name="ccity" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Maharashtra" name="cstate" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" name="zcode" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../static/images/card_img.png" alt="" >
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Enter your name on card" name="cname" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text" placeholder="1111-2222-3333-4444" name="cno" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="January" name="emonth" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="text" placeholder="2023" name="eyear" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" name="cvv" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Place Order" class="submit-btn" name="Click_me">
    </form>
</body>
</html>