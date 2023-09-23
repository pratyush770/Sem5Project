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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <form class="form" method="POST" action="" id="myForm">
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
            <label for="time">Time</label>
            <input type="time" value="12:00" name="time" required>
        </div> <br>
        <button type="submit" class="submit" name="Click">
            Submit
        </button>
    </form>
    <!-- <h1 id="displayPrice"></h1> -->

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