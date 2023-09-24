<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $sname = $_POST['sname'];
    $semail = $_POST['semail'];
    $sstate = $_POST['sstate'];
    $time = $_POST['time'];

    $host = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'subscription_details';

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO subscription_form(sname,semail,sstate,time) VALUES ('$sname','$semail','$sstate','$time')";
    if ($conn->query($sql) === TRUE) 
    {
        $response = "Data inserted successfully!";
    } 
    else 
    {
        $response = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Send the response back to the JavaScript
    echo json_encode($response);
}
?>

<?php
require_once 'connection1.php';
$sid="";
if(isset($_GET['id']))
{
    $sid=$_GET['id'];
}
$sql_query="SELECT * from subscription WHERE id = $sid";
$myresult=mysqli_query($con,$sql_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup</title>
    <!-- Bootstrap Css-->
    <link rel="stylesheet" href="../static/subscription_form.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- <form class="form" method="POST" action="" id="myForm">
        <p class="form-title">Schedule Pickup</p>
        <div class="input-container">
            <label for="name" >Name</label>
            <input id="name" type="text" placeholder="Enter your name" name="sname" required>
        </div>
        <div class="input-container">
            <label for="name">Email</label>&nbsp;
            <input id="email" type="email" placeholder="Enter your email" name="semail" required>
        </div>
        <?php
      ?>
        <div class="input-container">
            <label for="plan">Plan</label> &nbsp;&nbsp;
            <input id="plan" type="text" value="<?php //echo $row['plan'];?>" style="font-size:16px;" readonly>
        </div>
        <div class="input-container">
            <label for="price">Price</label>&nbsp;&nbsp;
            <input id="price" type="text" value="<?php //echo $row['sprice'];?>" style="font-size:16px;" readonly>
        </div>
        <?php
        //}
  //}
  ?>
        <div class="input-container">
            <label for="state">State</label>&nbsp;
            <select name="sstate" id="state" required>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Gujarat">Gujarat</option>
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
        <div class="input-container">
            <label for="time">Time</label>&nbsp;
            <input type="time" value="12:00" name="time" required>
        </div> <br>
        <button type="submit" class="submit" name="Click">
            Submit
        </button>
    </form> -->
    

    <div class="container">

    <form class="form" action="" method="POST" id="myForm">

        <div class="row">

            <div class="col">

                <h3 class="title">Customer details</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter your name" name="sname" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Enter your email" name="semail" required>
                </div>
                <?php
                if($myresult->num_rows >0)
     {
        while($row = $myresult->fetch_assoc())
        {
      ?>
                <div class="inputBox" style="margin:20px 0;">
                    <span>plan and price :</span>
                    <input type="text" value="<?php echo $row['plan'];?> (&#8377;<?php echo $row['sprice'];?>)" style="font-family:sans-serif;font-size:16px" readonly>
                </div>
                <?php
        }
  }
  ?>
                <div class="inputBox">
                    <span>state :</span>
                    <select name="sstate" required>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Gujarat">Gujarat</option>
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
                    <div class="inputBox">
                        <span>time :</span>
                        <input type="time" name="time" value="12:00" required>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const myForm = document.getElementById("myForm");
            
            myForm.addEventListener("submit", function (e) {
                e.preventDefault(); // Prevent the form from actually submitting
                
                // Serialize form data
                const formData = new FormData(myForm);
                
                // Submit form data to the server
                fetch("http://localhost/Sem5Project/templates/subscription_form.php", {
                    method: "POST",
                    body: formData,
                })
                .then((response) => response.json())
                .then((data) => {
                    // Show SweetAlert based on the response from the server
                    Swal.fire({
                        icon: "success",
                        title: "Form submitted successfully!",
                        text: data,
                        });
                    })
                    .catch((error) => {
                        Swal.fire({
                            icon: "success",
                            title: "Form submitted successfully!",
                            text: "We'll get back to you soon",
                        }).then(() => {
                        // Clear the form after successful submission
                        myForm.reset();
                        window.location.href = "http://localhost/Sem5Project/templates/subscription.php";
                    });
                        console.error("Error:", error);
                    })
            });
        });

    </script>
    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>