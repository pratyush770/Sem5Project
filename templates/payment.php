<?php
if(isset($_POST['Click_me']))
    {  
    $fname = $_POST['fname'];   
    $email2 = $_POST['email2'];
    $addr = $_POST['addr'];
    $ccity = $_POST['ccity'];
    $cstate = $_POST['cstate'];

    $host = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'product_details';

    $conn = mysqli_connect($host,$username,$password,$dbname);

    $query = "INSERT INTO payment_details(fname,email2,addr,ccity,cstate) values ('$fname','$email2','$addr','$ccity','$cstate')";
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
                        <select name="cstate" required>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Gujarat>Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                    </div>
                    <!-- <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" name="zcode" required>
                    </div> -->
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
                    <select required>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                        
                    </select>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="text" placeholder="2023" name="eyear" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="password" placeholder="1234" name="cvv" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Place Order" class="submit-btn" name="Click_me">
    </form>
</body>
</html>